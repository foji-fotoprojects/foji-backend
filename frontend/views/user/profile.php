<?php

/**
 * @var $this yii\web\View
 * @var $profile common\models\UserProfile
 * @var $passwordForm common\models\ChangePasswordForm
*/

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Modal;

$this->title = 'Редактирование профиля';
?>

<main class="profile">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/user" class="text">< Личный кабинет</a>
        </div>

        <h2>Редактирование профиля</h2>
<!--        --><?php //Pjax::begin(['enablePushState' => false]); ?>
            <div id="profile-avatar">
                <?php if ($profile['avatar_url']) {
                    $avatar = $profile['avatar_url'];
                } else
                    switch ($profile['sex']){
                        case 0: // женщина
                            $avatar = 'avatar_female.svg';
                            break;
                        case 1: // мужчина
                            $avatar = 'avatar_male.svg';
                            break;
                        default:
                            $avatar = 'dog.svg';
                    } ?>
                <?= Html::img("@web/images/user/avatar/$avatar",['alt' => 'Аватар', 'id' => 'img_avatar']) ?>
            </div>

                <?php $form = ActiveForm::begin([
                    'action' => ['user/update']
                ]);
                ?>
                <?= $form->field($profile, 'imageFile')
                       ->label('Выбрать фото', ['class' => 'btn btn_border_gray pointer'])
                       ->fileInput();
                ?>

                <?= $form->field($profile, 'firstName')->label('Имя')->textInput(); ?>
                <?= $form->field($profile, 'lastName')->label('Фамилия')->textInput(); ?>
                <?= $form->field($profile, 'sex')->label('Пол')->radioList(['Женский', 'Мужской']); ?>
                <?= $form->field($profile, 'phone')->label('Телефон')->input('tel'); ?>
                <?= $form->field($profile, 'birthday')->label('Дата рождения')->input('date'); ?>

            <label>E-mail</label>
            <label><?= Yii::$app->user->identity->email ?></label>
                <?= $form->field($profile, 'info')->label('Информация о себе (для фотографов)')->textarea(); ?>

        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>

                <?= Html::submitButton('Сохранить',['class' => 'btn btn_red pointer']); ?>
                <?= Html::resetButton('Отмена', ['class' => 'btn btn_border_gray pointer']) ?>

            <?php ActiveForm::end() ?>

        <h3>Сменить пароль</h3>

        <?php $form = ActiveForm::begin([
            'action' => ['change-password']
        ]); ?>

        <?= $form->field($passwordForm, 'currentPassword')->label('Введите старый пароль')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($passwordForm, 'newPassword')->label('Введите новый пароль')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($passwordForm, 'newPasswordRepeat')->label('Введите новый пароль еще раз')->passwordInput(['maxlength' => true]) ?>

        <?= Html::submitButton('Сохранить',['class' => 'btn btn_red pointer']) ?>
        <?= Html::resetButton('Отмена', ['class' => 'btn btn_border_gray pointer']) ?>

        <?php ActiveForm::end(); ?>

    </div>
</main>

