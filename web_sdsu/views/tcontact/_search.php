<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\TcontactSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcontact-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contactname_th') ?>

    <?= $form->field($model, 'contactname_en') ?>

    <?= $form->field($model, 'contactname_cn') ?>

    <?= $form->field($model, 'map') ?>

    <?php // echo $form->field($model, 'contactdetail_th') ?>

    <?php // echo $form->field($model, 'contactdetail_en') ?>

    <?php // echo $form->field($model, 'contactdetail_cn') ?>

    <?php // echo $form->field($model, 'reply') ?>

    <?php // echo $form->field($model, 'id_type') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'date_add') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
