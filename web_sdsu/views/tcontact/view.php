<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tcontact */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tcontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontact-view">

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
            'contactname_th',
            'contactname_en',
            'map:ntext',
            'contactdetail_th:ntext',
            'contactdetail_en:ntext',
            'reply:ntext',
            'id_type',
            'id_user',
            'date_add',
        ],
    ]) ?>

</div>
