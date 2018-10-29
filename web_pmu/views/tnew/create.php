<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_pmu\models\Tnew */

$this->title = 'Create Tnew';
$this->params['breadcrumbs'][] = ['label' => 'Tnews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tnew-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
