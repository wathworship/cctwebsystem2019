<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_pmu\models\Tdocument */

$this->title = 'Create Tdocument';
$this->params['breadcrumbs'][] = ['label' => 'Tdocuments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tdocument-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
