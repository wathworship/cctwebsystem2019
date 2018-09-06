<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tcontact */

$this->title = 'Update Tcontact: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tcontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tcontact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
