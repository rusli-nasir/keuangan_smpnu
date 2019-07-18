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
    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>
    <?= !$model->isNewRecord?$form->field($model, 'status')->dropDownList(['0' => 'Tidak Aktif','1' => 'Aktif']):null ?>
    <?= ''//$form->field($model, 'info')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?php if($model->isNewRecord){
        ?>
        <p>
            <b>Catatan:</b><br>
            <ul>
                <li><b class="text-danger">"Penting"</b> Pastikan seluruh transaksi pada tahun ajaran sebelumnya telah di inputkan sebelum membuat tahun ajaran baru</li>
                <li>
                    <span>Menambahkan tahun ajaran baru akan otomatis membuat</span>
                    <ul>
                        <li>Generate semester baru sesuai tahun ajaran</li>
                        <li>Generate saldo rekening, dimana saldo disesuaikan dengan saldo terakhir dari tahun ajaran aktif sebelumnya, <br>jika tidak ada yang aktif maka otomatis sldo di set menjadi 0</li>
                        <li>Tahun ajaran sebelumnya otomatis di <b>non aktifkan</b></li>
                    </ul>
                </li>
            </ul>
        </p>
        <?php
    }?>
</div>
