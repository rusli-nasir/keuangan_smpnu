<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tingkat */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Tingkat',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tingkats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tingkat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
