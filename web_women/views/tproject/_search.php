<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_women\models\TprojectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tproject-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'projectname_th') ?>

    <?= $form->field($model, 'projectname_en') ?>

    <?= $form->field($model, 'projectname_cn') ?>

    <?= $form->field($model, 'projectdetail') ?>

    <?php // echo $form->field($model, 'projectdetail_en') ?>

    <?php // echo $form->field($model, 'projectdetail_cn') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date_add') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
