<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Restok */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restok-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_RESTOK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ID_PRODUK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TGL_RESTOK')->textInput() ?>

    <?= $form->field($model, 'JML_RESTOK')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
