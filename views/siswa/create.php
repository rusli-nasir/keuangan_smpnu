<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Siswa */

$this->title = Yii::t('app', 'Data {modelClass} Baru', [
    'modelClass' => 'Siswa',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Siswas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'kewajibanModel' => $kewajibanModel,
    ]) ?>

</div>
