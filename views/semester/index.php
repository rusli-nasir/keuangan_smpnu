<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Semester */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Semesters');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semester-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'tahun_ajaran',
                'value' => 'idTahunAjaran.info',
                'filter' => \app\models\TahunAjaran::selectOptions(),

            ],
            [
                'attribute' => 'semester',
                'filter' => [1=> 'Ganjil',2=> 'Genap'],
                'value' => 'nameSemester',
            ],
            'tanggal_mulai',
            'tanggal_selesai',
            'keterangan:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
