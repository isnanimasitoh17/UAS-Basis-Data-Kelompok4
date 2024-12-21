<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaksi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_TRANSAKSI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PELANGGAN')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_TRANSAKSI')->textInput() ?>

    <?= $form->field($model, 'JUMLAH')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
