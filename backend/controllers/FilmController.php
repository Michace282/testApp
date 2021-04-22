<?php

namespace backend\controllers;

use Yii;
use common\models\Film;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * FilmController implements the CRUD actions for Film model.
 */
class FilmController extends Controller
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
     * Lists all Film models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Film::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Film model.
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
     * Creates a new Film model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Film();

        if ($model->load(Yii::$app->request->post())) {
			
			

			/*$mimage = UploadedFile::getInstance($model, 'm_image');
           if (!is_null($mimage)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->main_image = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
			  
              $path = Yii::$app->params['uploadPath'] . $model->main_image;
			  
              $mimage->saveAs($path);
            }
			
			$image01 = UploadedFile::getInstance($model, 'image01');
           if (!is_null($image01)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image1 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image1;
			  
              $image01->saveAs($path);
			  
            }
			
			$image02 = UploadedFile::getInstance($model, 'image02');
           if (!is_null($image02)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image2 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
              $path = Yii::$app->params['uploadPath'] . $model->image2;
			   
              $image02->saveAs($path);
            }
			
			$image03 = UploadedFile::getInstance($model, 'image03');
           if (!is_null($image03)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image3 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
              $path = Yii::$app->params['uploadPath'] . $model->image3;
			   
              $image03->saveAs($path);
            }
			
			$image04 = UploadedFile::getInstance($model, 'image04');
           if (!is_null($image04)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image4 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image4;
			   
              $image04->saveAs($path);
            }
			
			$image05 = UploadedFile::getInstance($model, 'image05');
           if (!is_null($image05)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image5 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image5;
			   
              $image05->saveAs($path);
            }*/
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
     * Updates an existing Film model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            /*$mimage = UploadedFile::getInstance($model, 'm_image');
           if (!is_null($mimage)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->main_image = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
			  
              $path = Yii::$app->params['uploadPath'] . $model->main_image;
			  
              $mimage->saveAs($path);
            }
			
			$image01 = UploadedFile::getInstance($model, 'image01');
           if (!is_null($image01)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image1 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image1;
			  
              $image01->saveAs($path);
			  
            }
			
			$image02 = UploadedFile::getInstance($model, 'image02');
           if (!is_null($image02)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image2 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
              $path = Yii::$app->params['uploadPath'] . $model->image2;
			   
              $image02->saveAs($path);
            }
			
			$image03 = UploadedFile::getInstance($model, 'image03');
           if (!is_null($image03)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image3 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
			  
              $path = Yii::$app->params['uploadPath'] . $model->image3;
			   
              $image03->saveAs($path);
            }
			
			$image04 = UploadedFile::getInstance($model, 'image04');
           if (!is_null($image04)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image4 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image4;
			   
              $image04->saveAs($path);
            }
			
			$image05 = UploadedFile::getInstance($model, 'image05');
           if (!is_null($image05)) {
             $ext = end((explode(".", $image->name)));
              // generate a unique file name to prevent duplicate filenames
              $model->image5 = Yii::$app->security->generateRandomString().".{$ext}";
              // the path to save file, you can set an uploadPath
              // in Yii::$app->params (as used in example below)                       
              Yii::$app->params['uploadPath'] = addslashes (Yii::$app->basePath . '/web/uploads/');
              $path = Yii::$app->params['uploadPath'] . $model->image5;
			   
              $image05->saveAs($path);
            }*/
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
     * Deletes an existing Film model.
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
     * Finds the Film model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Film the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Film::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
