<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel web_sdsu\models\TjournalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tjournals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tjournal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tjournal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_th',
            'name_en',
            'd_journal',
            'issue',
            //'journal_file:ntext',
            //'cover:ntext',
            //'date_add',
            //'date_edit',
            //'user_id',
            //'unit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
