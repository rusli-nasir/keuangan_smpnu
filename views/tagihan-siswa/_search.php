<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TagihanSiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tagihan-siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tahun_ajaran') ?>

    <?= $form->field($model, 'jatuh_tempo') ?>

    <?= $form->field($model, 'id_siswa') ?>

    <?= $form->field($model, 'jenis_tagihan') ?>

    <?php // echo $form->field($model, 'total_tagihan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'is_lunas') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
