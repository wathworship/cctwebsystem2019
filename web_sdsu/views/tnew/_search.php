<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\TnewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tnew-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'newname_th') ?>

    <?= $form->field($model, 'newname_en') ?>

    <?= $form->field($model, 'newname_cn') ?>

    <?= $form->field($model, 'newdetail_th') ?>

    <?php // echo $form->field($model, 'newdetail_en') ?>

    <?php // echo $form->field($model, 'newdetail_cn') ?>

    <?php // echo $form->field($model, 'date_news') ?>

    <?php // echo $form->field($model, 'ref') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'newtype_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date_add') ?>

    <?php // echo $form->field($model, 'newproject') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
