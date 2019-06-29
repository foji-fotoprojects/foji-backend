<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<div class="modal-sign-in">
    <div class="container">
        <div class="modal-content">
            <header class="modal-content-header">
                <svg class="btn-modal-close" width="31" height="31" viewBox="0 0 31 31" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L30 30" stroke="black" stroke-width="2"/>
                    <path d="M30 1L0.999999 30" stroke="black" stroke-width="2"/>
                </svg>
            </header>
            <p class="title">Вход</p>

            <?php $form = ActiveForm::begin(
                [
                    'id' => 'login-form',
                    'enableAjaxValidation' => true,
                    'action' => ['site/login']
                ]);


            echo $form
                ->field($model, 'username')
                ->label(false)
                ->textInput(['0' => 'Логин ...']);

            echo $form
                ->field($model, 'password')
                ->label(false)
                ->passwordInput(['placeholder' => 'Пароль ...']);

            echo Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']);


            ActiveForm::end(); ?>

        </div>
    </div>
</div>
