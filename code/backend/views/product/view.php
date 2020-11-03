<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->pro_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pro_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pro_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pro_id',
            'pro_name',
            'pro_slug',
            'cat_id',
            'type_id',
            'pro_image1',
            'pro_image2',
            'pro_price',
            'pro_old_price',
            'pro_total',
            'pro_content:ntext',
            'link_face',
            'link_shopee',
            'link_larada',
            'link_tiki',
            'link_youtube',
            'link_zalo',
            'SEO_title',
            'SEO_description',
            'pro_location',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
