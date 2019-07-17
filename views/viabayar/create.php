<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Viabayar */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Viabayar',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Viabayars'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viabayar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
