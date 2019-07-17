<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subtingkat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subtingkat-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'tingkat')->dropDownList(\app\models\Tingkat::selectOptions()) ?>
    <?= $form->field($model, 'subtingkat')->textInput(['maxlength' => true])->label('Kelas') ?>
    <?= $form->field($model, 'urutan')->textInput(['type' => 'number']) ?>
    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
