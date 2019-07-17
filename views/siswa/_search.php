<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Siswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nis') ?>

    <?= $form->field($model, 'nisn') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'no_un') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'panggilan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tahun_masuk') ?>

    <?php // echo $form->field($model, 'id_angkatan') ?>

    <?php // echo $form->field($model, 'id_kelas') ?>

    <?php // echo $form->field($model, 'kondisi_finansial') ?>

    <?php // echo $form->field($model, 'kelamin') ?>

    <?php // echo $form->field($model, 'tempat') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
