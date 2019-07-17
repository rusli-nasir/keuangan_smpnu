<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Biaya */

$this->title = $model->biaya;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Biayas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-view">

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
            'biaya',
            'kode',
            [
                'attribute' => 'isAngsur',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('tidak_ada'),$model->isAngsur);
                }
            ],
            [
                'attribute' => 'isDiskon',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('tipe_diskon'),$model->isDiskon,'Diskon Reguler & Khusus Khusus');
                }
            ],
            [
                'attribute' => 'ditagih',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('jenis_tagihan'),$model->ditagih);
                }
            ],
            'keterangan:ntext',
        ],
    ]) ?>

</div>
