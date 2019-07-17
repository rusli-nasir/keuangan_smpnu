<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriRekening */

$this->title = $model->replid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kategori Rekenings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-rekening-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->replid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->replid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'kode',
            'nama',
            [
                'attribute' => 'jenis',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('debit_kredit'),$model->jenis);
                }

            ],
            [
                'attribute' => 'jenistambah',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('debit_kredit'),$model->jenistambah);
                }

            ],
            [
                'attribute' => 'jeniskurang',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('debit_kredit'),$model->jeniskurang);
                }

            ],
        ],
    ]) ?>

</div>
