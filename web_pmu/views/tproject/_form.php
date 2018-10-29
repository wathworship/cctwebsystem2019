<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model web_pmu\models\Tproject */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tproject-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'projectname_th')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'projectname_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'projectname_cn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'projectdetail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'projectdetail_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'projectdetail_cn')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
