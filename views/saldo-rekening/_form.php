<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Saldorekening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="saldorekening-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model->idDetilrekening, 'nama')->staticControl()->label('Nama Rekening') ?>

    <?= $form->field($model->idTahunAjaran, 'info')->staticControl()->label('Tahun Ajaran') ?>

    <?= $form->field($model, 'nominal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
