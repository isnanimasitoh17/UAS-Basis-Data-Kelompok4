<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PemilikSearchapp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemilik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'ID_PEMILIK') ?>

    <?= $form->field($model, 'NAMA') ?>

    <?= $form->field($model, 'Produk_ID_PRODUK') ?>

    <?= $form->field($model, 'Pelanggan_ID_PELANGGAN') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
