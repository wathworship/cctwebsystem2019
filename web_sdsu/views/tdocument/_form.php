<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tdocument */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tdocument-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail_th')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'detail_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'doc_type')->textInput() ?>

    <?= $form->field($model, 'link_doc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <?= $form->field($model, 'date_update')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
