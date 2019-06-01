<?php


namespace frontend\widgets;


use common\models\UserProfile;
use Yii;
use yii\base\Widget;

class UserDataWidget extends Widget
{
    public function run()
    {
        $profile = UserProfile::findOne(['user_id' => Yii::$app->user->id]);

        if ($profile['firstName'] || $profile['lastName']) {
            return $this->render('userDataWidget', [
                'firstName' => $profile['firstName'],
                'lastName' => $profile['lastName'],
                'avatar_url' => $profile['avatar_url'],
            ]);
        } else {
            return $this->render('userDataWidget', [
                'firstName' => Yii::$app->user->email,
                'lastName' => '',
                'avatar_url' => $profile['avatar_url'],
            ]);
        }
    }
}