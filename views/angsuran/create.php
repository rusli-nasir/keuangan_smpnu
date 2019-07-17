<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Angsuran */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Angsuran',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Angsurans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angsuran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
