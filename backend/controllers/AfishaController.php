<?php

namespace backend\controllers;

use Yii;
use common\models\Afisha;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AfishaController implements the CRUD actions for Afisha model.
 */
class AfishaController extends Controller
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
     * Lists all Afisha models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Afisha::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Afisha model.
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
     * Creates a new Afisha model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Afisha();

        if ($model->load(Yii::$app->request->post())) {
           /*$mimage	= UploadedFile::getInstance($model, 'mimage');
           if (!is_null($image05)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image;
			   
              $mimage->saveAs($path)
			  
		    }
		   */
		    if ($model->save()) {             
                return $this->redirect(['view', 'id' => $model->id]);             
            }  else {
                var_dump ($model->getErrors()); die();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Afisha model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            /*$mimage	= UploadedFile::getInstance($model, 'mimage');
           if (!is_null($image05)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image;
			   
              $mimage->saveAs($path)
			  
		    }
		   */
		    if ($model->save()) {             
                return $this->redirect(['view', 'id' => $model->id]);             
            }  else {
                var_dump ($model->getErrors()); die();
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Afisha model.
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
     * Finds the Afisha model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Afisha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Afisha::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
