<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cat_id')->dropDownList($dataCat,['prompt'=>'- Select Category -']) ?>
    
    <?= $form->field($model, 'type_id')->dropDownList($dataType,['prompt'=>'- Select Type -']) ?>

    <?= $form->field($model, 'pro_image1')->textInput(['id'=>'imageFile1']) ?>
    
    <?= $form->field($model, 'pro_image2')->textInput(['id'=>'imageFile2']) ?>

    <?= $form->field($model, 'pro_image3')->textInput(['id'=>'imageFile3']) ?>
    
    <?= $form->field($model, 'pro_image4')->textInput(['id'=>'imageFile4']) ?>

    <?= $form->field($model, 'pro_price')->textInput() ?>

    <?= $form->field($model, 'pro_old_price')->textInput() ?>

    <?= $form->field($model, 'pro_total')->textInput() ?>

    <?= $form->field($model, 'pro_content')->textarea(['id'=>'content_text']) ?>

    <?= $form->field($model, 'link_face')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_shopee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_larada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_tiki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_zalo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_description')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'pro_location')->dropDownList($location) ?>
    
    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
