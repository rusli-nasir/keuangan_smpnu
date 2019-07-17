<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Biaya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biaya-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'replid') ?>

    <?= $form->field($model, 'biaya') ?>

    <?= $form->field($model, 'kode') ?>

    <?= $form->field($model, 'isAngsur') ?>

    <?= $form->field($model, 'isDiskon') ?>

    <?php // echo $form->field($model, 'ditagih') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
