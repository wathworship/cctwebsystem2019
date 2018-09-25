<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\ThistorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thistory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'history_name') ?>

    <?= $form->field($model, 'history_th') ?>

    <?= $form->field($model, 'history_en') ?>

    <?= $form->field($model, 'history_cn') ?>

    <?php // echo $form->field($model, 'ref') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'history_type') ?>

    <?php // echo $form->field($model, 'd_history') ?>

    <?php // echo $form->field($model, 'history_user') ?>

    <?php // echo $form->field($model, 'history_dateadd') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
