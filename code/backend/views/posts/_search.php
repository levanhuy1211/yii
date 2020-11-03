<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'post_name') ?>

    <?= $form->field($model, 'post_slug') ?>

    <?= $form->field($model, 'post_content') ?>

    <?= $form->field($model, 'link_face') ?>

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
