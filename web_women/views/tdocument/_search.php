<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_women\models\TdocumentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tdocument-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_th') ?>

    <?= $form->field($model, 'name_en') ?>

    <?= $form->field($model, 'name_cn') ?>

    <?= $form->field($model, 'detail_th') ?>

    <?php // echo $form->field($model, 'detail_en') ?>

    <?php // echo $form->field($model, 'detail_cn') ?>

    <?php // echo $form->field($model, 'doc_type') ?>

    <?php // echo $form->field($model, 'link_doc') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date_add') ?>

    <?php // echo $form->field($model, 'date_update') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
