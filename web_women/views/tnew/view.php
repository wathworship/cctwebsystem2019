<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_women\models\Tnew */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnew-view">

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
            'newname_th',
            'newname_en',
            'newname_cn',
            'newdetail_th:ntext',
            'newdetail_en:ntext',
            'newdetail_cn:ntext',
            'date_news',
            'ref',
            'docs:ntext',
            'newtype_id',
            'type_id',
            'user_id',
            'date_add',
            'newproject',
            'status',
        ],
    ]) ?>

</div>
