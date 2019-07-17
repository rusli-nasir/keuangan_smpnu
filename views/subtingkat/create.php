<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subtingkat */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Subtingkat',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subtingkats'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subtingkat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
