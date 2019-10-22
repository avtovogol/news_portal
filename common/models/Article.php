<?php

namespace common\models;

use common\models\query\ArticleQuery;
use trntv\filekit\behaviors\UploadBehavior;
use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * This is the model class for table "article".
 *
 * @property integer             $id
 * @property string              $slug
 * @property string              $title
 * @property string              $body
 * @property string              $view
 * @property string              $thumbnail_base_url
 * @property string              $thumbnail_path
 * @property string              $thumbnail
 * @property array               $attachments
 * @property integer             $category_id
 * @property integer             $status
 * @property integer             $published_at
 * @property integer             $created_by
 * @property integer             $updated_by
 * @property integer             $created_at
 * @property integer             $updated_at
 * @property string              $tags_array
 *
 * @property User                $author
 * @property User                $updater
 * @property ArticleCategory     $category
 * @property ArticleAttachment[] $articleAttachments
 * @property string              $source_link
 */
class Article extends ActiveRecord
{
    const STATUS_PUBLISHED = 1;
    const STATUS_DRAFT     = 0;

    /**
     * @var array
     */
    public $tags_array;

    /**
     * @var array
     */
    public $attachments;

    /**
     * @var array
     */
    public $thumbnail;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @return ArticleQuery
     */
    public static function find()
    {
        return new ArticleQuery(get_called_class());
    }

    /**
     * @return array statuses list
     */
    public static function statuses()
    {
        return [
            self::STATUS_DRAFT => 'Draft',
            self::STATUS_PUBLISHED => 'Опубликовано',
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            BlameableBehavior::class,
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'title',
                'immutable' => true,
            ],
            [
                'class' => UploadBehavior::class,
                'attribute' => 'attachments',
                'multiple' => true,
                'uploadRelation' => 'articleAttachments',
                'pathAttribute' => 'path',
                'baseUrlAttribute' => 'base_url',
                'orderAttribute' => 'order',
                'typeAttribute' => 'type',
                'sizeAttribute' => 'size',
                'nameAttribute' => 'name',
            ],
            [
                'class' => UploadBehavior::class,
                'attribute' => 'thumbnail',
                'pathAttribute' => 'thumbnail_path',
                'baseUrlAttribute' => 'thumbnail_base_url',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'body', 'category_id'], 'required'],
            [['slug'], 'unique'],
            [['body'], 'string'],
            [['published_at'], 'default', 'value' => function () {
                return date(DATE_ISO8601);
            }],
            [['published_at'], 'filter', 'filter' => 'strtotime', 'skipOnEmpty' => true],
            [['category_id'], 'exist', 'targetClass' => ArticleCategory::class, 'targetAttribute' => 'id'],
            [['status'], 'integer'],
            [['thumbnail_base_url', 'thumbnail_path', 'source_link'], 'string', 'max' => 1024],
            [['title'], 'string', 'max' => 512],
            [['view', 'slug'], 'string', 'max' => 255],
            [['attachments', 'thumbnail','tags_array','source_link'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'ЧПУ',
            'title' => 'Название',
            'body' => 'Текст',
            'view' => 'Шаблон статьи',
            'thumbnail' => 'Эскиз изображения',
            'category_id' => 'Категория',
            'status' => 'Опубликовано',
            'published_at' => 'Дата публикации',
            'created_by' => 'Автор',
            'updated_by' => 'Обновивший',
            'created_at' => 'Создано',
            'updated_at' => 'Обновлено',
            'tags_array' => 'Теги',
            'source_link' => 'Ссылка на источник',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdater()
    {
        return $this->hasOne(User::class, ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(ArticleCategory::class, ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleTags()
    {
        return $this->hasMany(ArticleTag::class, ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTags()
    {
        return $this->hasMany(Tag::class, ['id' => 'tag_id'])->via('articleTags');
    }

    public function getTagsAsString()
    {
        $arr = \yii\helpers\ArrayHelper::map($this->tags, 'id', 'name');
        return implode(', ', $arr);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleAttachments()
    {
        return $this->hasMany(ArticleAttachment::class, ['article_id' => 'id']);
    }

    public function afterFind()
    {
        $this->tags_array=$this->tags;
        $this->thumbnail['path'] =$this->thumbnail_path;
        $this->thumbnail['base_url']=$this->thumbnail_base_url;
        $this->thumbnail['type']='image/jpeg';

    }


    /**
     * Сохранение тегов статьи в модель ArticleTag и создание новых тегов, если такие появились
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $arr = ArrayHelper::map($this->tags, 'id', 'id');
        if ($this->tags_array != 0) {
            foreach ($this->tags_array as $one) {
                if (!in_array($one, $arr)) {
                    $tags = ArrayHelper::map(Tag::find()->all(), 'id', 'id');
                    if(!in_array($one,$tags)){
                        $tag = new Tag();
                        $tag->name = $one;
                        $tag->save();
                        $one = $tag->id;
                    }
                    $model = new ArticleTag();
                    $model->article_id = $this->id;
                    $model->tag_id = $one;
                    $model->save();
                }
                if (isset($arr[$one])) {
                    unset($arr[$one]);
                }
            }
        }
        ArticleTag::deleteAll(['tag_id' => $arr, 'article_id' => $this->id]);
    }
}
