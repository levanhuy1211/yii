<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'par_id')->dropDownList($dataCat,['prompt'=>'- Select Parent -']) ?>

    <?= $form->field($model, 'link_face')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_shopee')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_larada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_tiki')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_zalo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SEO_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
