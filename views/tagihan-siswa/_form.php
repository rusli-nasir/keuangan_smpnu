<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TagihanSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-siswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'tahun_ajaran')->textInput() ?>

    <?= $form->field($model, 'jatuh_tempo')->textInput() ?>

    <?= $form->field($model, 'id_siswa')->textInput() ?>

    <?= $form->field($model, 'jenis_tagihan')->textInput() ?>

    <?= $form->field($model, 'total_tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'is_lunas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
