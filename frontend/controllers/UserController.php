<?php

namespace frontend\controllers;

use common\models\ChangePasswordForm;
use common\models\User;
use common\models\UserProfile;
use Yii;
use yii\base\ErrorException;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\NotFoundHttpException;


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
            ]);
        }

        return $this->redirect('site/login');
    }

    /**
     * Сохранение профиля
     */
    public function actionUpdate()
    {
        $profile = UserProfile::findOne(['user_id' => Yii::$app->user->identity->getId()]);

        if ($profile->load(Yii::$app->request->post()) && $profile->save()) {
            Yii::$app->session->setFlash('success', 'Профиль сохранен');
        }

        throw new NotFoundHttpException('Ошибка, попробуйте еще раз.');
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
            return $this->redirect('user/profile');
        }
        return 'Болт!';
    }

    /**
     * @return User
     */
    private function findModel()
    {
        return User::findOne(Yii::$app->user->identity->getId());
    }
}


//use Yii;
//use common\models\User;
//use common\models\query\UserQuery;
//use yii\web\Controller;
//use yii\web\NotFoundHttpException;
//use yii\filters\VerbFilter;
//
///**
// * UserController implements the CRUD actions for User model.
// */
//class UserController extends Controller
//{
//    /**
//     * {@inheritdoc}
//     */
//    public function behaviors()
//    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//        ];
//    }
//
//    /**
//     * Lists all User models.
//     * @return mixed
//     */
//    public function actionIndex()
//    {
//        $searchModel = new UserQuery();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }
//
//    /**
//     * Displays a single User model.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionView($id)
//    {
//        return $this->render('view', [
//            'model' => $this->findModel($id),
//        ]);
//    }
//
//    /**
//     * Creates a new User model.
//     * If creation is successful, the browser will be redirected to the 'view' page.
//     * @return mixed
//     */
//    public function actionCreate()
//    {
//        $model = new User();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Updates an existing User model.
//     * If update is successful, the browser will be redirected to the 'view' page.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionUpdate($id)
//    {
//        $model = $this->findModel($id);
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('update', [
//            'model' => $model,
//        ]);
//    }
//
//    /**
//     * Deletes an existing User model.
//     * If deletion is successful, the browser will be redirected to the 'index' page.
//     * @param integer $id
//     * @return mixed
//     * @throws NotFoundHttpException if the model cannot be found
//     */
//    public function actionDelete($id)
//    {
//        $this->findModel($id)->delete();
//
//        return $this->redirect(['index']);
//    }
//}
