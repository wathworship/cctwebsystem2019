<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Thistory */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Thistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'history_name',
            'history_th:ntext',
            'history_en:ntext',
            'history_cn:ntext',
            'ref',
            'docs:ntext',
            'history_type',
            'd_history',
            'history_user',
            'history_dateadd',
        ],
    ]) ?>

</div>
