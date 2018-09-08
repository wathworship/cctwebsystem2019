<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tjournal */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tjournals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tjournal-view">

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
            'd_journal',
            'issue',
            'journal_file:ntext',
            'cover:ntext',
            'date_add',
            'date_edit',
            'user_id',
            'unit',
        ],
    ]) ?>

</div>
