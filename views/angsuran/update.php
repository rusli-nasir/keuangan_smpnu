<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Angsuran */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Angsuran',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Angsurans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->replid, 'url' => ['view', 'replid' => $model->replid, 'angsuran' => $model->angsuran]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="angsuran-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
