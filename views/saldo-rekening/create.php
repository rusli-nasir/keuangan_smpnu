<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Saldorekening */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Saldorekening',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Saldorekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saldorekening-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
