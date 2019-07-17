<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Siswa */
/* @var $kewajibanModel \app\models\KewajibanSiswaForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siswa-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Data Siswa</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'nis')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'nisn')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'panggilan')->textInput(['maxlength' => true]) ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>
                            <?= $form->field($model, 'kelamin')->dropDownList(param('gender')) ?>
                            <?= $form->field($model, 'id_kelas')->dropDownList(\app\models\Subtingkat::selectOptions()) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $form->field($model, 'tanggal_lahir')->widget(\yii\jui\DatePicker::className(),[
                                'dateFormat' => 'php:Y-m-d',
                                'options' => ['class' => 'form-control']
                            ]) ?>

                            <?= $form->field($model, 'kondisi_finansial')->dropDownList(\app\models\FinansialSiswa::selectOptions()) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
