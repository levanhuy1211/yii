<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pro_id')->dropDownList($dataPro,['prompt'=>'- Select Product -']) ?>

    <?= $form->field($model, 'banner_image')->textInput(['id'=>'imageFile1']) ?>

    <?= $form->field($model, 'banner_text_top')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'banner_text_dow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
