<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_women\models\Tcontact */

$this->title = 'Create Tcontact';
$this->params['breadcrumbs'][] = ['label' => 'Tcontacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tcontact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
