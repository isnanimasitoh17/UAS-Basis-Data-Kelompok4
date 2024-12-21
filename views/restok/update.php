<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Restok */

$this->title = 'Update Restok: ' . $model->ID_RESTOK;
$this->params['breadcrumbs'][] = ['label' => 'Restoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_RESTOK, 'url' => ['view', 'id' => $model->ID_RESTOK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="restok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
