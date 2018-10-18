<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_women\models\Thistory */

$this->title = 'Create Thistory';
$this->params['breadcrumbs'][] = ['label' => 'Thistories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="thistory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
