<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Detilrekening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detilrekening-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'kategorirekening')->dropDownList(\app\models\KategoriRekening::selectOptions()) ?>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
            </div>
            <?= a(Yii::t('app', 'Create {modelClass}', [
                'modelClass' => 'Detilrekening',
            ]), ['create'], ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
