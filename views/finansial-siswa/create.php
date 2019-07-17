<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FinansialSiswa */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Finansial Siswa',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Finansial Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="finansial-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
