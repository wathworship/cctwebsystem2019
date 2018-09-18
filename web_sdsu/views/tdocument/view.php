<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tdocument */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tdocuments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdocument-view">

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
            'name_th',
            'name_en',
            'name_cn',
            'detail_th:ntext',
            'detail_en:ntext',
            'detail_cn:ntext',
            'doc_type',
            'link_doc:ntext',
            'type_id',
            'user_id',
            'date_add',
            'date_update',
        ],
    ]) ?>

</div>
