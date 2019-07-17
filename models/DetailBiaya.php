<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%psb_detailbiaya}}".
 *
 * @property integer $replid
 * @property integer $biaya
 * @property string $nominal
 * @property integer $subtingkat
 * @property integer $golongan
 * @property integer $detailgelombang
 * @property integer $detilrekening
 *
 * @property Biaya $idBiaya
 * @property Subtingkat $idSubTingkat
 * @property GolonganSiswa $idGolongan
 */
class DetailBiaya extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%psb_detailbiaya}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['biaya', 'nominal', 'detilrekening'], 'required'],
            [['biaya', 'subtingkat', 'golongan', 'detailgelombang', 'detilrekening'], 'integer'],
            [['nominal'], 'number'],
        ];
    }

    public function getIdBiaya()
    {
        return $this->hasOne(Biaya::className(),['replid'=> 'biaya']);
    }

    public function getIdSubTingkat()
    {
        return $this->hasOne(Subtingkat::className(),['replid'=> 'subtingkat']);
    }

    public function getIdGolongan()
    {
        return $this->hasOne(GolonganSiswa::className(),['id'=> 'golongan']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'replid' => Yii::t('app', 'Replid'),
            'biaya' => Yii::t('app', 'Biaya'),
            'nominal' => Yii::t('app', 'Nominal'),
            'subtingkat' => Yii::t('app', 'Subtingkat'),
            'golongan' => Yii::t('app', 'Golongan'),
            'detailgelombang' => Yii::t('app', 'Detailgelombang'),
            'detilrekening' => Yii::t('app', 'Detilrekening'),
        ];
    }
}
