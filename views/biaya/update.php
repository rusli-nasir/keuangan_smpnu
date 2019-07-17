<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biaya */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Biaya',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Biayas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->replid, 'url' => ['view', 'id' => $model->replid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="biaya-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
