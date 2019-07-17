<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\Saldorekening */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="saldorekening-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'idkategorirekening')->dropDownList(\app\models\KategoriRekening::selectOptions(),[
                    'prompt' => '--Semua Kategori--'
            ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'tahunajaran')->dropDownList(\app\models\TahunAjaran::selectOptions()) ?>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
