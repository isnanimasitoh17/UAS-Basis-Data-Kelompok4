<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pemilik */

$this->title = 'Update Pemilik: ' . $model->ID_PEMILIK;
$this->params['breadcrumbs'][] = ['label' => 'Pemiliks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PEMILIK, 'url' => ['view', 'id' => $model->ID_PEMILIK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pemilik-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
