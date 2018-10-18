<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_women\models\Tjournal */

$this->title = 'Create Tjournal';
$this->params['breadcrumbs'][] = ['label' => 'Tjournals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tjournal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
