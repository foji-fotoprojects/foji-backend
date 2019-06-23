<?php

/**
 * @var $this yii\web\View
 * @var $profile common\models\UserProfile
 * @var $model common\models\ChangePasswordForm
*/

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;

$this->title = 'Редактирование профиля';
?>

<main class="profile">
    <div class="container">
        <div class="breadcrumbs">
            <a href="/user" class="text">< Личный кабинет</a>
        </div>
        <h2>Редактирование профиля</h2>
        <div class="avatar">
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
            <?= Html::img("@web/images/user/$avatar",['alt' => 'Аватар']) ?>
        </div>

        <a class="btn btn_border_gray" href="#">Выбрать фото</a>

        <?php Pjax::begin(['enablePushState' => false]); ?>

            <?php $form = ActiveForm::begin([
                    'options' => ['data' => ['pjax' => true]],
                    'action' => ['user/update']
                ]);
            ?>
                <?= $form->field($profile, 'firstName')->label('Имя')->textInput(); ?>
                <?= $form->field($profile, 'lastName')->label('Фамилия')->textInput(); ?>
                <?= $form->field($profile, 'sex')->label('Пол')->radioList(['Женский', 'Мужской']); ?>
                <?= $form->field($profile, 'phone')->label('Телефон')->input('tel'); ?>
                <?= $form->field($profile, 'birthday')->label('Дата рождения')->input('date'); ?>

            <label>E-mail</label>
            <label><?= Yii::$app->user->identity->email ?></label>

                <?= $form->field($profile, 'info')->label('Информация о себе (для фотографов)')->textarea(); ?>
                <?= Html::submitButton('Сохранить',['class' => 'btn btn_red pointer']); ?>
                <?= Html::a('Отмена', ['user/profile'], ['class' => 'btn btn_border_gray']); ?>

            <?php ActiveForm::end() ?>

        <?php Pjax::end() ?>

        <h3>Сменить пароль</h3>

        <?php Pjax::begin(['enablePushState' => false]) ?>

            <?php $form = ActiveForm::begin([
                    'options' => ['data' => ['pjax' => true]],
                    'action' => 'user/pwd',
                    'id' => 'password-change-form'
                ]);
            ?>

                <?= $form->field($model, 'currentPassword')->label('Введите старый пароль')->passwordInput(['maxlength' => true, 'require']) ?>
                <?= $form->field($model, 'newPassword')->label('Введите новый пароль')->passwordInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'newPasswordRepeat')->label('Введите новый пароль еще раз')->passwordInput(['maxlength' => true]) ?>

                <?= Html::submitButton('Сохранить',['class' => 'btn btn_red pointer']) ?>
                <?= Html::a('Отмена', ['user/profile'], ['class' => 'btn btn_border_gray']) ?>

            <?php ActiveForm::end() ?>

        <?php Pjax::end() ?>
    </div>
</main>

