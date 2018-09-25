<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tjournal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tjournal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_cn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd_journal')->textInput() ?>

    <?= $form->field($model, 'issue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issue_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'issue_cn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'journal_file')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'cover')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <?= $form->field($model, 'date_edit')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'unit')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
