<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Biaya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'biaya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isAngsur')->dropDownList(param('tidak_ada')) ?>

    <?= $form->field($model, 'isDiskon')->dropDownList(param('tipe_diskon')) ?>

    <?= $form->field($model, 'ditagih')->dropDownList(param('jenis_tagihan'), ['prompt' => '']) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
