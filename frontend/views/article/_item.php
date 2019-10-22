<?php
/**
 * @var $this yii\web\View
 * @var $model common\models\Article
 */
use yii\helpers\Html;

?>
<div class="row pb-4">
    <div class="col-md-5">
        <div class="fh5co_hover_news_img">
            <div class="fh5co_news_img">
                <?php echo Html::img($model->thumbnail_base_url.$model->thumbnail_path);?>
            </div>
            <div></div>
        </div>
    </div>
    <div class="col-md-7 animate-box">
        <?php echo Html::a($model->title, ['view', 'slug'=>$model->slug], ['class'=>'fh5co_magna py-2'])?>
        <div class="clearfix"></div>
        <?=Html::a($model->author->username,'#', ['class'=>'fh5co_mini_time py-3']);?>
        <?php echo ' - '.Yii::$app->formatter->asDate($model->created_at,"long").',';?>
        <?php echo Html::a($model->category->title,['index', 'ArticleSearch[category_id]' => $model->category_id],['class'=>'fh5co_mini_time py-3'])?>
        <div class="fh5co_consectetur">
            <?php echo \yii\helpers\StringHelper::truncate(strip_tags($model->body), 200, '...', null, true) ?>
        </div>
        <?php echo (($model->tags)?'<i class="fa fa-tags" aria-hidden="true"></i> ' : '');
        foreach ($model->tags as $tag) {
            echo Html::a($tag->name,['/article/index', 'ArticleSearch[tags]' => $tag->id])  . ', ';
        };?>
    </div>
</div>
