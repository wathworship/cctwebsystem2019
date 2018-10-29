<?php

namespace web_sdsu\controllers;

use Yii;
use web_sdsu\models\Thistory;
use web_sdsu\models\Dhistoryy;
use web_sdsu\models\Department;
use web_sdsu\models\Dposition;
use web_sdsu\models\Dprefix;
use web_sdsu\models\Tperson;
use web_sdsu\models\ThistorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ThistoryController implements the CRUD actions for Thistory model.
 */
class ThistoryController extends Controller
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
     * Lists all Thistory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ThistorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Thistory model.
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
     * Creates a new Thistory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Thistory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Thistory model.
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

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Thistory model.
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
     * Finds the Thistory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Thistory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Thistory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionAbout()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=1')->orderBy('id DESC')->one();
      
        

        return $this->render('about', [
            'model' => $model,
           

        ]);
    }

    public function actionTus()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=4')->one();
        $objective = Thistory::find()->where('history_type=8')->andWhere('d_history=5')->one();
        $goal = Thistory::find()->where('history_type=8')->andWhere('d_history=6')->one();
     

        return $this->render('tus', [
            'model' => $model,
            'objective' => $objective,
            'goal' => $goal,
           
        ]);
    }

    public function actionBible()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=7')->one();
      


        return $this->render('bible', [
            'model' => $model,
           
        ]);
    }

    public function actionPan()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=9')->one();
        $yut = Thistory::find()->where('history_type=8')->andWhere('d_history=11')->one();

        return $this->render('pan', [
            'model' => $model,
            'yut' => $yut,
        ]);
    }

    public function actionYut()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=10')->one();

        return $this->render('yut', [
            'model' => $model,
           
        ]);
    }

    public function actionWat()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=11')->one();

        return $this->render('wat', [
            'model' => $model,
           
        ]);
    }

    public function actionStruct()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=3')->one();
        $manager1 = Tperson::find()->where('id_type=8')->andWhere('id_department=4')->orderBy('id ASC')->one();
        $manager = Tperson::find()->where('id_type=8')->andWhere('id_department=4')->orderBy('id ASC')->all();

        return $this->render('struct', [
            'model' => $model,
            'manager1' => $manager1,
            'manager' => $manager,
           
        ]);
    }

    public function actionHistory()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=2')->one();

        return $this->render('history', [
            'model' => $model,
           
        ]);
    }

    public function actionPlan() 
    {   
 
         $model = Thistory::find()->where('history_type=8')->andWhere('d_history=14')->orderBy('id ASC')->all();
 
         return $this->render('plan', [
             'model' => $model,
            
         ]);
     
    } 

   

}
