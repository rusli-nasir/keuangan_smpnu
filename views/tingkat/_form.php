<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tingkat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tingkat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tingkat')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'urutan')->textInput(['type' => 'number']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
