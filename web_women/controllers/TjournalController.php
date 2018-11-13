<?php

namespace web_women\controllers;

use Yii;
use web_women\models\Thistory;
use web_women\models\Tjournal;
use web_women\models\TjournalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * TjournalController implements the CRUD actions for Tjournal model.
 */
class TjournalController extends Controller
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
     * Lists all Tjournal models.
     * @return mixed
     */
    /*public function actionIndex()
    {
        $searchModel = new TjournalSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }*/

    /**
     * Displays a single Tjournal model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }*/

    /**
     * Creates a new Tjournal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*public function actionCreate()
    {
        $model = new Tjournal();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }*/

    /**
     * Updates an existing Tjournal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }*/

    /**
     * Deletes an existing Tjournal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    /*public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }*/

    /**
     * Finds the Tjournal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tjournal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tjournal::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionArticle() 
   {   
       //$model = Tjournal::find()->where('unit=8')->orderBy('id DESC')->all(); 
       $bible = Thistory::find()->where('history_type=10')->andWhere('d_history=7')->one();
       $query = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->orderBy('id DESC');

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count]);
        $pagination->setPageSize(6);

        // limit the query using the pagination and retrieve the articles
        $models = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

       return $this->render('article', [ 
           'models' => $models, 
           'bible' => $bible,
           'pagination' => $pagination,
       ]); 
   }
   
   
   public function actionArticle2() 
   {   

        $article2 = Tjournal::find()->where('unit=10')->andWhere('d_journal=6')->orderBy('id ASC')->all();
        $bible = Thistory::find()->where('history_type=10')->andWhere('d_history=7')->one();
        return $this->render('article2', [
            'article2' => $article2,
            'bible' => $bible,
        ]);
    
   } 


}
