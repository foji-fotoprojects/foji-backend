<?php


namespace frontend\widgets;

use Yii;
use yii\base\Widget;

class UserDataWidget extends Widget
{
    public function run()
    {
        $profile = Yii::$app->user->identity->userProfile;

        if ($profile['firstName'] || $profile['lastName']) {
            return $this->render('userDataWidget', [
                'firstName' => $profile['firstName'],
                'lastName' => $profile['lastName'],
                'avatar_url' => $profile['avatar_url'],
            ]);
        } else {
            return $this->render('userDataWidget', [
                'firstName' => Yii::$app->user->identity->email,
                'lastName' => '',
                'avatar_url' => $profile['avatar_url'],
            ]);
        }
    }
}