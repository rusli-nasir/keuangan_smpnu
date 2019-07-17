<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Departemen */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Departemen',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Departemens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departemen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
