<?php

namespace backend\controllers;

use common\models\Gallery;
use common\models\SuppliersImg;
use common\models\SuppliersImgSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * SuppliersImgController implements the CRUD actions for SuppliersImg model.
 */
class SuppliersImgController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all SuppliersImg models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SuppliersImgSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SuppliersImg model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SuppliersImg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SuppliersImg();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                if ($model->uploaded_images) {
                    $model->saveImages();
                }
//                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SuppliersImg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post())) {
            if ($model->uploaded_images) {
                $model->saveImages();
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SuppliersImg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SuppliersImg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return SuppliersImg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SuppliersImg::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    public function actionImageUpload()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $file_image = UploadedFile::getInstancesByName('img');

        $folder_full = Yii::getAlias('@frontend') . '/web/uploads/suppliers';

        if (!file_exists($folder_full)) {
            mkdir($folder_full, 0777, true);
        }

        if ($file_image) {
            $folder = '/suppliers/';
            foreach ($file_image as $file) {

                $ext = pathinfo($file->name, PATHINFO_EXTENSION);
                $name = pathinfo($file->name, PATHINFO_FILENAME);
                $generateName = Yii::$app->security->generateRandomString();
                $path = Yii::getAlias('@frontend') . '/web/uploads/' . $folder . $generateName . ".{$ext}";
                $file->saveAs($path);
                $data = [
                    'generate_name' => $generateName,
                    'name' => $name,
                    'path' => Yii::getAlias('@uploadsUrl') . $folder . $generateName . ".{$ext}"
                ];
            }
        }

        return $data;
    }

    public function actionImageDelete()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        if ($this->request->post()) {

            $post = $this->request->post();

            $imgs = SuppliersImg::find()
                ->where(['img' => $post['key']])
                ->one();

            if ($imgs) {
                $imgs->delete();
            }
        }

    }
}
