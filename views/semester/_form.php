<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Semester */
/* @var $form yii\widgets\ActiveForm */
?>
<?= \app\widgets\Alert::widget()?>
<div class="semester-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'semester')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'tanggal_mulai')->widget(\yii\jui\DatePicker::className(),[
                        'options' => ['class' => 'form-control'],
                        'dateFormat' => 'php:Y-m-d'
                    ]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'tanggal_selesai')->widget(\yii\jui\DatePicker::className(),[
                        'options' => ['class' => 'form-control'],
                        'dateFormat' => 'php:Y-m-d'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
