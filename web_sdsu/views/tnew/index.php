<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_sdsu\models\TnewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tnews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnew-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tnew', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'newname_th',
            'newname_en',
            'newname_cn',
            'newdetail_th:ntext',
            //'newdetail_en:ntext',
            //'newdetail_cn:ntext',
            //'ref',
            //'docs:ntext',
            //'newtype_id',
            //'type_id',
            //'user_id',
            //'date_add',
            //'newproject',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
