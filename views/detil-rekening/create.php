<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Detilrekening */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Detilrekening',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Detilrekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detilrekening-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
