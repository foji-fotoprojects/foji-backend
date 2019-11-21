<?php

namespace frontend\controllers;

use common\models\ChangePasswordForm;
use common\models\User;
use common\models\UserProfile;
use Yii;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;


class UserController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Личный кабинет
     * @return mixed
     */
    public function actionIndex()
    {

    }

    /**
     * Личный кабинет организатора
     * @return mixed
     */
    public function actionAccountOrganizer()
    {

    }

    /**
     * Редактирование профиля
     * @return mixed
     */
    public function actionProfile()
    {
        if (Yii::$app->user->identity) {
            return $this->render('profile', [
                'profile' => Yii::$app->user->identity->userProfile,
                'passwordForm' => new ChangePasswordForm($this->findModel())
            ]);
        }
        return $this->redirect('site/login');
    }

    /**
     * Сохранение профиля
     */
    public function actionUpdate()
    {
        $model = UserProfile::findOne(['user_id' => Yii::$app->user->identity->getId()]);

        if ($model->load(Yii::$app->request->post())) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            if ($model->validate() && $model->save()) {
                if ($model->imageFile) {
                    $fileName = strtolower(md5(Yii::$app->user->getId()) . '.' . $model->imageFile->extension);
                    $model->avatar_url = $fileName;
                    $model->imageFile->saveAs('images/user/avatar/' . $fileName);
                }
                Yii::$app->session->setFlash('success', 'Профиль сохранен');
                return $this->redirect('profile');
            }
        }
        throw new NotFoundHttpException('Что-то пошло не так, попробуйте еще раз.');
    }

    /**
     * Смена пароля
     */
    public function actionChangePassword()
    {
        $user = $this->findModel();
        $model = new ChangePasswordForm($user);

        if ($model->load(Yii::$app->request->post()) && $model->setNewPassword()){
            Yii::$app->session->setFlash('success', 'Новый пароль сохранен');
        }

        return $this->redirect('profile');
    }

    /**
     * @return User
     */
    private function findModel()
    {
        return User::findOne(Yii::$app->user->identity->getId());
    }
}