<?php

namespace app\controllers;

use Yii;
use app\models\Angsuran;
use app\models\search\Angsuran as AngsuranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AngsuranController implements the CRUD actions for Angsuran model.
 */
class AngsuranController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Angsuran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AngsuranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Angsuran model.
     * @param string $replid
     * @param integer $angsuran
     * @return mixed
     */
    public function actionView($replid, $angsuran)
    {
        return $this->render('view', [
            'model' => $this->findModel($replid, $angsuran),
        ]);
    }

    /**
     * Creates a new Angsuran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Angsuran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'replid' => $model->replid, 'angsuran' => $model->angsuran]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Angsuran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $replid
     * @param integer $angsuran
     * @return mixed
     */
    public function actionUpdate($replid, $angsuran)
    {
        $model = $this->findModel($replid, $angsuran);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'replid' => $model->replid, 'angsuran' => $model->angsuran]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Angsuran model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $replid
     * @param integer $angsuran
     * @return mixed
     */
    public function actionDelete($replid, $angsuran)
    {
        $this->findModel($replid, $angsuran)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Angsuran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $replid
     * @param integer $angsuran
     * @return Angsuran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($replid, $angsuran)
    {
        if (($model = Angsuran::findOne(['replid' => $replid, 'angsuran' => $angsuran])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
