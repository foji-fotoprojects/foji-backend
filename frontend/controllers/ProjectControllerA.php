<?php

namespace frontend\controllers;

use common\models\Photographer;
use common\models\User;
use common\models\Photo;
use Yii;
use common\models\Project;
use common\models\ProjectSearch;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProjectControllerA implements the CRUD actions for Project model.
 */
class ProjectControllerA extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Project models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Project model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Project model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Project();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        $photographer = ArrayHelper::map(Photographer::find()->all(), 'id', 'photographer_id');
        $user = ArrayHelper::map(User::find()->all(), 'id', 'email');

        return $this->render('create', [
            'model' => $model,
            'photographer' => $photographer,
            'user' => $user,
        ]);
    }

    /**
     * Updates an existing Project model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        $photographer = ArrayHelper::map(Photographer::find()->all(), 'id', 'photographer_id');
        $user = ArrayHelper::map(User::find()->all(), 'id', 'email');

        return $this->render('update', [
            'model' => $model,
            'photographer' => $photographer,
            'user' => $user,
        ]);
    }

    /**
     * Deletes an existing Project model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Project model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Project the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUploadPhoto()
    {
        $model = new Photo();
        if ($model->load(Yii::$app->request->post())) {
            // var_dump($_FILES); exit;
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $fileName = strtolower(md5(uniqid($model->imageFile->baseName)) . '.' . $model->imageFile->extension);
            //var_dump(strtolower(md5(uniqid($model->imageFile->baseName)) . '.' . $model->imageFile->extension)); die;
            if (!empty($model->imageFile)){
                $model->image = 'uploads/' . $fileName;
                $model->save();
                $model->imageFile->saveAs('uploads/' . $fileName);
            }
        }
        $project = ArrayHelper::map(Project::find()->all(), 'id', 'id');
        return $this->render('upload', [
            'model'=>$model,
            'project'=>$project,
        ]);
    }
}
