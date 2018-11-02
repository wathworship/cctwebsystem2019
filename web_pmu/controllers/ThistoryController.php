<?php

namespace web_pmu\controllers;

use Yii;
use web_pmu\models\Thistory;
use web_pmu\models\Dhistoryy;
use web_pmu\models\Department;
use web_pmu\models\Dposition;
use web_pmu\models\Dprefix;
use web_pmu\models\Tperson;
use web_pmu\models\ThistorySearch;
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
    /*public function actionIndex()
    {
        $searchModel = new ThistorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }*/

    /**
     * Displays a single Thistory model.
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
     * Creates a new Thistory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    /*public function actionCreate()
    {
        $model = new Thistory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }*/

    /**
     * Updates an existing Thistory model.
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
     * Deletes an existing Thistory model.
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
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=1')->orderBy('id DESC')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();
        

        return $this->render('about', [
            'model' => $model,
            'bible' => $bible,

        ]);
    }

    public function actionTus()
    {
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=4')->one();
        $objective = Thistory::find()->where('history_type=9')->andWhere('d_history=5')->one();
        $goal = Thistory::find()->where('history_type=9')->andWhere('d_history=6')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();
     

        return $this->render('tus', [
            'model' => $model,
            'objective' => $objective,
            'goal' => $goal,
            'bible' => $bible,
           
        ]);
    }

    public function actionBible()
    {
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();
        
        return $this->render('bible', [
            'model' => $model,
            'bible' => $bible,
            
           
        ]);
    }

    public function actionPan()
    {
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=9')->one();
        $yut = Thistory::find()->where('history_type=9')->andWhere('d_history=11')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();

        return $this->render('pan', [
            'model' => $model,
            'yut' => $yut,
            'bible' => $bible,
        ]);
    }

    public function actionYut()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=10')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();

        return $this->render('yut', [
            'model' => $model,
            'bible' => $bible,
           
        ]);
    }

    public function actionWat()
    {
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=11')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();

        return $this->render('wat', [
            'model' => $model,
            'bible' => $bible,
           
        ]);
    }

    public function actionStruct()
    {
        $model = Thistory::find()->where('history_type=8')->andWhere('d_history=3')->one();
        $manager1 = Tperson::find()->where('id_type=8')->andWhere('id_department=4')->orderBy('id ASC')->one();
        $manager = Tperson::find()->where('id_type=8')->andWhere('id_department=4')->orderBy('id ASC')->all();
        $director = Tperson::find()->where('id_type=8')->andWhere('id_position=5')->orderBy('id ASC')->one();
        $deputy_director = Tperson::find()->where('id_type=8')->andWhere(['not in','id_position',[5]])->andWhere(['id_department' => '5'])->orderBy('id ASC')->all();
        $adviser = Tperson::find()->where('id_type=8')->andWhere(['id_position' => '21'])->orderBy('id ASC')->all();
        $community = Tperson::find()->where('id_type=8')->andWhere('id_department=1')->orderBy('id ASC')->all();
        $community1 = Tperson::find()->where('id_type=8')->andWhere('id_department=1')->orderBy('id ASC')->one();
        $commu_aus1 = Tperson::find()->where('id_type=8')->andWhere('id_department=3')->orderBy('id ASC')->one();
        $commu_aus = Tperson::find()->where('id_type=8')->andWhere('id_department=3')->orderBy('id ASC')->all();
        $tei1 = Tperson::find()->where('id_type=8')->andWhere('id_department=2')->one();
        $tei = Tperson::find()->where('id_type=8')->andWhere('id_department=2')->orderBy('id ASC')->all();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();

        return $this->render('struct', [
            'model' => $model,
            'manager1' => $manager1,
            'manager' => $manager,
            'director' => $director,
            'deputy_director' => $deputy_director,
            'adviser' => $adviser,
            'community' => $community,
            'community1' => $community1,
            'commu_aus' => $commu_aus,
            'commu_aus1' => $commu_aus1,
            'tei1' => $tei1,
            'tei' => $tei,
            'bible' => $bible,
           
        ]);
    }

    public function actionHistory()
    {
        $model = Thistory::find()->where('history_type=9')->andWhere('d_history=2')->one();
        $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();

        return $this->render('history', [
            'model' => $model,
            'bible' => $bible,
           
        ]);
    }

    public function actionPlan() 
    {   
 
         $model = Thistory::find()->where('history_type=8')->andWhere('d_history=14')->orderBy('id ASC')->all();
         $bible = Thistory::find()->where('history_type=9')->andWhere('d_history=7')->one();
 
         return $this->render('plan', [
             'model' => $model,
             'bible' => $bible,
            
         ]);
     
    } 

   

}
