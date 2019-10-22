<?php

use trntv\filekit\widget\Upload;
use trntv\yii\datetime\DateTimeWidget;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\web\JsExpression;
use kartik\select2\Select2;
/**
 * @var $this       yii\web\View
 * @var $model      common\models\Article
 * @var $categories common\models\ArticleCategory[]
 */

?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation' => true,
]) ?>

<?php echo $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

<?php echo $form->field($model, 'slug')
    ->hint('Если вы оставите это поле пустым, ЧПУ будет сгенерирован автоматически')
    ->textInput(['maxlength' => true]) ?>

<?php echo $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(
    $categories,
    'id',
    'title'
), ['prompt' => '']) ?>

<?php echo $form->field($model, 'body')->widget(
    \yii\imperavi\Widget::class,
    [
        'plugins' => ['fullscreen', 'fontcolor', 'video'],
        'options' => [
            'minHeight' => 400,
            'maxHeight' => 400,
            'buttonSource' => true,
            'convertDivs' => false,
            'removeEmptyTags' => true,
            'imageUpload' => Yii::$app->urlManager->createUrl(['/file/storage/upload-imperavi']),
        ],
    ]
) ?>

<?php echo $form->field($model, 'thumbnail')->widget(
    Upload::class,
    [
        'url' => ['/file/storage/upload'],
        'maxFileSize' => 5000000, // 5 MiB,
        'acceptFileTypes' => new JsExpression('/(\.|\/)(gif|jpe?g|png)$/i'),
    ]);
?>

<?php echo $form->field($model, 'attachments')->widget(
    Upload::class,
    [
        'url' => ['/file/storage/upload'],
        'sortable' => true,
        'maxFileSize' => 10000000, // 10 MiB
        'maxNumberOfFiles' => 10,
    ]);
?>

<?php echo $form->field($model, 'view')->textInput(['maxlength' => true]) ?>

<?php echo $form->field($model, 'status')->checkbox() ?>

<?php echo $form->field($model, 'published_at')->widget(
    DateTimeWidget::class,
    [
        'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
    ]
) ?>

<?= $form->field($model, 'tags_array')->widget(Select2::classname(), [
    'data' => \yii\helpers\ArrayHelper::map(\common\models\Tag::find()->all(),'id','name'),
    'value'=> $model->tags,
    'language' => 'ru',
    'options' => ['placeholder' => 'Выбрать tag ...', 'multiple' => true],
    'pluginOptions' => [
        'tags' => true,
        'maximumInputLength' => 15,
        'allowClear' => true
    ],
])?>

<?php echo $form->field($model, 'source_link')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?php echo Html::submitButton(
        $model->isNewRecord ? 'Создать' : 'Редактировать',
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end() ?>
