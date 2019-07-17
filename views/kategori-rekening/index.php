<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\KategoriRekening */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Kategori Rekenings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-rekening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Kategori Rekening',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
