<?php

namespace frontend\controllers;

use common\models\UploadPhoto;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\UploadedFile;
use yii\filters\Cors;


class PhotoController extends ActiveController
{
    public $modelClass = UploadPhoto::class;

    // Кросс-доменные запросы  УДАЛИТЬ НА ПРОДАКШЕНЕ!
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
            'class' => Cors::className(),
            'cors' => [
                'Origin' => ['*'],
                'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                'Access-Control-Request-Headers' => ['*'],
            ],
        ];

        return $behaviors;
    }

    //public function actions()
   // {
     //   $actions = parent::actions();
   //    $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
    //    return $actions;
    //}

    public function actionCreate()
    {
        $model = new UploadPhoto();
        var_dump($_FILES);
        if ($model->load(\Yii::$app->request->post(), '') && $model->save()) {
            $model->image = UploadedFile::getInstancesByName('image');



            return $model->upload() ?: $model;
        }
        return $model->save();
    }
}