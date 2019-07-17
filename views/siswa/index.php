<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\Siswa */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Siswas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siswa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Siswa',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => function($model){
                    $nama = $model->nama;
                    $pg = ($model->panggilan)?'<br><i style="color: green">'.$model->panggilan.'</i>':null;
                    return "<u>{$nama}</u>{$pg}";
                }
            ],
            'nis',
            'nisn',
             [
                  'attribute' => 'kondisi_finansial',
                 'value' => 'idKodisiFinansial.kondisi'
             ],
            [
                'attribute' => 'kelamin',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('gender'),$model->kelamin);
                }
            ],
            [
                'attribute' => 'id_kelas',
                'value' => 'kelas.keterangan',
                'filter' => \app\models\Subtingkat::selectOptions()
            ],
            [
                    'attribute' => 'status',
                'value' => function($model){
                    return \yii\helpers\ArrayHelper::getValue(param('status_siswa'),$model->status);
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{update}{biaya-siswa}{delete}',
                'headerOptions' => ['style' => 'width:100px'],
                'buttons' => [
                        'biaya-siswa' => function($url, $model, $key){
                            $options = [
                                'title' => 'Biaya Iuran Siswa',
                                'aria-label' => 'Biaya Iuran Siswa',
                                'data-pjax' => '0',
                            ];
                            $icon = Html::tag('span', '', ['class' => "glyphicon glyphicon-piggy-bank"]);
                            return Html::a($icon, $url, $options);
                        }
                ]
            ],
        ],
    ]); ?>

</div>
