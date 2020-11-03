<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Config */

$this->title = $model->cf_id;
$this->params['breadcrumbs'][] = ['label' => 'Configs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="config-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cf_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cf_id], [
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
            'cf_id',
            'cf_site',
            'cf_phone',
            'cf_email:email',
            'cf_address',
            'cf_logo1',
            'cf_logo2',
            'cf_logo3',
            'cf_about',
            'link_face',
            'link_shopee',
            'link_larada',
            'link_tiki',
            'link_youtube',
            'link_zalo',
            'SEO_title',
            'SEO_description',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
