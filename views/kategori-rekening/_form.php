<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriRekening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-rekening-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->dropDownList([ 'd' => 'D', 'k' => 'K', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenistambah')->dropDownList([ 'd' => 'D', 'k' => 'K', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jeniskurang')->dropDownList([ 'd' => 'D', 'k' => 'K', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
