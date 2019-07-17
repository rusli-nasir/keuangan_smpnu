<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%keu_kategorirekening}}".
 *
 * @property integer $replid
 * @property integer $kode
 * @property string $nama
 * @property string $jenis
 * @property string $jenistambah
 * @property string $jeniskurang
 *
 * @property KeuDetilrekening[] $keuDetilrekenings
 */
class KategoriRekening extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keu_kategorirekening}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode'], 'integer'],
            [['nama', 'jenis', 'jenistambah', 'jeniskurang'], 'required'],
            [['jenis', 'jenistambah', 'jeniskurang'], 'string'],
            [['nama'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'replid' => Yii::t('app', 'Replid'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
            'jenis' => Yii::t('app', 'Jenis'),
            'jenistambah' => Yii::t('app', 'Penambahan'),
            'jeniskurang' => Yii::t('app', 'Pengurangan'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKeuDetilrekenings()
    {
        return $this->hasMany(KeuDetilrekening::className(), ['kategorirekening' => 'replid']);
    }

    public static function selectOptions()
    {
        $model = self::find()
            ->select(['replid','kode_nama' => "CONCAT('[',kode,'] ', nama)"])
            ->asArray()
            ->all();
        return ArrayHelper::map($model,'replid','kode_nama');
    }
}
