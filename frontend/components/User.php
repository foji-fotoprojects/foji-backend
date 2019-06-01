<?php
namespace frontend\components;

use Yii;

/**
 * Extended yii\web\User
 */
class User extends \yii\web\User
{
    public function getEmail()
    {
        return Yii::$app->user->identity->email;
    }
}