<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_sdsu\models\TdocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tdocuments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdocument-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tdocument', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['class' => 'yii\grid\ActionColumn'],
            'id',
            'name_th',
            //'name_en',
            //'name_cn',
            //'detail_th:ntext',
            //'detail_en:ntext',
            //'detail_cn:ntext',
            'doc_type',
            'link_doc:ntext',
            'type_id',
            //'user_id',
            //'date_add',
            //'date_update',

            
        ],
    ]); ?>
</div>
