<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TagihanSiswa */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Tagihan Siswa',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tagihan Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tagihan-siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
