<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriRekening */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Kategori Rekening',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategori Rekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->replid, 'url' => ['view', 'id' => $model->replid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="kategori-rekening-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
