<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detilrekening */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Detilrekening',
]) . ' ' . $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detilrekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->replid, 'url' => ['view', 'id' => $model->replid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="detilrekening-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
