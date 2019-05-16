<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\tables\Project */
/* @var $form yii\widgets\ActiveForm */
/* @var $user array */
/* @var $photographer array */

?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'how_to_get')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_end')->textInput() ?>

    <?= $form->field($model, 'time_start')->textInput() ?>

    <?= $form->field($model, 'time_end')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput() ?>

    <?= $form->field($model, 'qty_photos')->textInput() ?>

    <?= $form->field($model, 'path_images')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'makeup')->textInput() ?>

    <?= $form->field($model, 'hairstyle')->textInput() ?>

    <?= $form->field($model, 'costume')->textInput() ?>

    <?= $form->field($model, 'accessories')->textInput() ?>

    <?= $form->field($model, 'studio')->textInput() ?>

    <?= $form->field($model, 'prepayment')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'payment_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photographer_id')->dropDownList($photographer) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'moderation' => 'Moderation', 'correction' => 'Correction', 'published' => 'Published', 'finished' => 'Finished', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_id')->dropDownList($user) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
