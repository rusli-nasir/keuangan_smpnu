<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Saldorekening */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Saldorekenings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="saldorekening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                 'attribute' => 'idkategorirekening',
                'value' => 'kategorirekening',
                'group' => true,  // enable grouping,
                'groupedRow' => true,
                'groupOddCssClass' => 'kv-grouped-row',  // configure odd group cell css class
                'groupEvenCssClass' => 'kv-grouped-row', // configure even group cell css class
            ],
            [
                'attribute' => 'kodeRekening',
                'value' => 'kode',
                'width' => '100px',
            ],
            [
                'attribute' => 'namaRekening',
                'value' => 'nama',
            ],
            [
                'attribute' => 'jenisRekening',
                'value' => function($model){
                    return $model['jenis'] == 'd'? 'Debit':'Kredit';
                },
                'width' => '80px',
                'filter' => ['d' => 'Debit','k' => 'Kredit']
            ],
            [
                'attribute' => 'saldo',
                'hAlign' => 'right',
                'vAlign' => 'middle',
                'width' => '7%',
                'format' => ['decimal', 2],
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}'
            ],
        ],
    ]); ?>

</div>
