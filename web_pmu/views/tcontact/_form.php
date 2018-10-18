<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_pmu\models\Tcontact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tcontact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contactname_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactname_cn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'map')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contactdetail_th')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contactdetail_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contactdetail_cn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reply')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_type')->textInput() ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
