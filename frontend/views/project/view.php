<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\tables\Project */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Upload Photo', ['upload-photo', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'theme',
            'short_info',
            'location',
            'how_to_get',
            'date_start',
            'date_end',
            'time_start',
            'time_end',
            'duration',
            'qty_photos',
            'path_images',
            'makeup',
            'hairstyle',
            'costume',
            'accessories',
            'studio',
            'prepayment',
            'price',
            'payment_method',
            'info:ntext',
            'photographer_id',
            'views',
            'status',
            'created_at',
            'updated_at',
            'user_id',
        ],
    ]) ?>

</div>
