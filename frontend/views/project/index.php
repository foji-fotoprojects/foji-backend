<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'theme',
            'short_info',
            'location',
            //'how_to_get',
            //'date_start',
            //'date_end',
            //'time_start',
            //'time_end',
            //'duration',
            //'qty_photos',
            //'path_images',
            //'makeup',
            //'hairstyle',
            //'costume',
            //'accessories',
            //'studio',
            //'prepayment',
            //'price',
            //'payment_method',
            //'info:ntext',
            //'photographer_id',
            //'views',
            //'status',
            //'created_at',
            //'updated_at',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
