<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_sdsu\models\TcontactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tcontacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tcontact', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'contactname_th',
            'contactname_en',
            'contactname_cn',
            'map:ntext',
            //'contactdetail_th:ntext',
            //'contactdetail_en:ntext',
            //'contactdetail_cn:ntext',
            //'reply:ntext',
            //'id_type',
            //'id_user',
            //'date_add',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
