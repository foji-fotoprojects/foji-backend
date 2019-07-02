<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'theme') ?>

    <?= $form->field($model, 'short_info') ?>

    <?= $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'how_to_get') ?>

    <?php // echo $form->field($model, 'date_start') ?>

    <?php // echo $form->field($model, 'date_end') ?>

    <?php // echo $form->field($model, 'time_start') ?>

    <?php // echo $form->field($model, 'time_end') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'qty_photos') ?>

    <?php // echo $form->field($model, 'path_images') ?>

    <?php // echo $form->field($model, 'makeup') ?>

    <?php // echo $form->field($model, 'hairstyle') ?>

    <?php // echo $form->field($model, 'costume') ?>

    <?php // echo $form->field($model, 'accessories') ?>

    <?php // echo $form->field($model, 'studio') ?>

    <?php // echo $form->field($model, 'prepayment') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'payment_method') ?>

    <?php // echo $form->field($model, 'info') ?>

    <?php // echo $form->field($model, 'photographer_id') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
