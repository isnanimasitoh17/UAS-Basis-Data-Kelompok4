<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RestokSearchapp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restok-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_RESTOK') ?>

    <?= $form->field($model, 'ID_PRODUK') ?>

    <?= $form->field($model, 'TGL_RESTOK') ?>

    <?= $form->field($model, 'JML_RESTOK') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
