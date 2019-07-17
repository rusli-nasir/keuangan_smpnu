<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Detilrekening */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Detil Rekening');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detilrekening-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-6">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'attribute' => 'kategorirekening',
                'group' => true,  // enable grouping,
                'groupedRow' => true,                    // move grouped column to a single grouped row
                'groupOddCssClass' => 'kv-grouped-row',  // configure odd group cell css class
                'groupEvenCssClass' => 'kv-grouped-row', // configure even group cell css class
                'value' => function ($model, $key, $index, $widget) {
                    $kode = $model->idKatRekening->kode;
                    $nama = $model->idKatRekening->nama;
                    return "[{$kode}] {$nama}";
                },
                'filter' => \app\models\KategoriRekening::selectOptions(),
                'filterInputOptions' => ['placeholder' => 'Any supplier'],
            ],
            'kode',
            'nama',
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
