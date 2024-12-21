<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STOK')->textInput() ?>

    <?= $form->field($model, 'HARGA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Transaksi_ID_TRANSAKSI')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
