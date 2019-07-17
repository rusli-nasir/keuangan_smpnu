<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TahunAjaran */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tahun Ajaran',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tahun Ajarans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->info, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tahun-ajaran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>