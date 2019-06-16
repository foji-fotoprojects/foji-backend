<?php


namespace frontend\widgets;


use common\models\UserProfile;
use Yii;
use yii\base\Widget;

class UserDataWidget extends Widget
{
    public function run()
    {
        $userProfile = UserProfile::findOne(['user_id' => Yii::$app->user->id]);

        return $this->render('userDataWidget', [
            'firstName' => $userProfile['firstName'],
            'lastName' => $userProfile['lastName'],
            'avatar_url' => $userProfile['avatar_url'],
//            'userProfile' => $userProfile,
        ]);
    }
}