<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Restok */

$this->title = 'Create Restok';
$this->params['breadcrumbs'][] = ['label' => 'Restoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
