<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TahunAjaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tahun-ajaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tahun_ajaran')->textInput(['maxlength' => true]) ?>
    <?= ''//$form->field($model, 'departemen')->textInput(['maxlength' => true]) ?>
    <?= ''//$form->field($model, 'tanggal_mulai')->textInput() ?>
    <?= ''//$form->field($model, 'tanggal_akhir')->textInput() ?>
    <?= ''//$form->field($model, 'status')->textInput() ?>
    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
    <?= ''//$form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
