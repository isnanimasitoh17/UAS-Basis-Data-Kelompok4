<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pemilik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pemilik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PEMILIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NAMA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Produk_ID_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pelanggan_ID_PELANGGAN')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
