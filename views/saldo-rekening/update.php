<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Saldorekening */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Saldo Rekening',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Saldorekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idTahunAjaran->info, 'url' => ['view', 'id' => $model->replid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="saldorekening-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
