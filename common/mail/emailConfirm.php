<?php

use yii\helpers\Html;

/**
 * @var $this yii\web\View
 * @var $user \common\models\User
 */

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['user/default/email-confirm', 'token' => $user->email_confirm_token]);
?>
    <p>Hello! ?>,</p>

    <p>Follow the link below to confirm your email:</p>

    <p><?= Html::a(Html::encode($confirmLink), $confirmLink) ?></p>

<p>If you have not registered on our website, then simply delete this email.</p>