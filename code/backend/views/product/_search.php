<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pro_id') ?>

    <?= $form->field($model, 'pro_name') ?>

    <?= $form->field($model, 'pro_slug') ?>

    <?= $form->field($model, 'cat_id') ?>

    <?= $form->field($model, 'pro_images') ?>

    <?php // echo $form->field($model, 'pro_price') ?>

    <?php // echo $form->field($model, 'pro_old_price') ?>

    <?php // echo $form->field($model, 'pro_total') ?>

    <?php // echo $form->field($model, 'pro_content') ?>

    <?php // echo $form->field($model, 'link_face') ?>

    <?php // echo $form->field($model, 'link_shopee') ?>

    <?php // echo $form->field($model, 'link_larada') ?>

    <?php // echo $form->field($model, 'link_tiki') ?>

    <?php // echo $form->field($model, 'link_youtube') ?>

    <?php // echo $form->field($model, 'link_zalo') ?>

    <?php // echo $form->field($model, 'SEO_title') ?>

    <?php // echo $form->field($model, 'SEO_description') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
