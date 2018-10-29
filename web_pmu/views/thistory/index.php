<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_pmu\models\ThistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thistories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Thistory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'history_name',
            'history_th:ntext',
            'history_en:ntext',
            'history_cn:ntext',
            //'ref',
            //'docs:ntext',
            //'history_type',
            //'d_history',
            //'history_user',
            //'history_dateadd',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
