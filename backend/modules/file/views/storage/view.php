<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var $this  yii\web\View
 * @var $model common\models\FileStorageItem
 */

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Записи о файлах', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<p>
    <?php echo Html::a('Удалить', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Вы уверены, что хотите удалить эту запись?',
            'method' => 'post',
        ],
    ]) ?>
</p>

<?php echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'component',
        'base_url:url',
        'path',
        'type',
        'size',
        'name',
        'upload_ip',
        'created_at:datetime',
    ],
]) ?>
