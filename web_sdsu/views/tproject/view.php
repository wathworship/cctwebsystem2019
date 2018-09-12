<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tproject */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tprojects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproject-view">

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
            'projectname_th',
            'projectname_en',
            'projectdetail:ntext',
            'docs:ntext',
            'year',
            'type_id',
            'user_id',
            'date_add',
        ],
    ]) ?>

</div>
