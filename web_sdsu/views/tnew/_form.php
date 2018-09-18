<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_sdsu\models\Tnew */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tnew-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newname_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newname_cn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'newdetail_th')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newdetail_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newdetail_cn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_news')->textInput() ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'newtype_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <?= $form->field($model, 'newproject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
