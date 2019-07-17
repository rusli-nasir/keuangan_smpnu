<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viabayar */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Viabayar',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Viabayars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->replid, 'url' => ['view', 'id' => $model->replid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="viabayar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
