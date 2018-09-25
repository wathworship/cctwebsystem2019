<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tproject */

$this->title = 'Create Tproject';
$this->params['breadcrumbs'][] = ['label' => 'Tprojects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tproject-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
