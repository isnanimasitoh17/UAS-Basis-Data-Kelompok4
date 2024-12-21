<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */

$this->title = 'Update Produk: ' . $model->ID_PRODUK;
$this->params['breadcrumbs'][] = ['label' => 'Produks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PRODUK, 'url' => ['view', 'id' => $model->ID_PRODUK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
