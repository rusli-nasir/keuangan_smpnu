<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Biaya */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Biayas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biaya-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Biaya',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'biaya',
            'kode',
            [
                'attribute' => 'isAngsur',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('tidak_ada'),$model->isAngsur);
                },
                'filter' => param('tidak_ada')
            ],
            [
                'attribute' => 'isDiskon',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('tipe_diskon'),$model->isDiskon,'Diskon Reguler & Khusus Khusus');
                },
                'filter' => param('tipe_diskon')
            ],
            [
                'attribute' => 'ditagih',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('jenis_tagihan'),$model->ditagih);
                },
                'filter' => param('jenis_tagihan')
            ],
             'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
