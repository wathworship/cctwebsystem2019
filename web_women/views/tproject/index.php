<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_women\models\TprojectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tprojects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproject-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tproject', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'projectname_th',
            'projectname_en',
            'projectname_cn',
            'projectdetail:ntext',
            //'projectdetail_en:ntext',
            //'projectdetail_cn:ntext',
            //'docs:ntext',
            //'year',
            //'type_id',
            //'user_id',
            //'date_add',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
