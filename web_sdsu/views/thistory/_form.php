<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Thistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="thistory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'history_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'history_th')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'history_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'history_cn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'history_type')->textInput() ?>

    <?= $form->field($model, 'd_history')->textInput() ?>

    <?= $form->field($model, 'history_user')->textInput() ?>

    <?= $form->field($model, 'history_dateadd')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
