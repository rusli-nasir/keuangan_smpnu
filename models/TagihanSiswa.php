<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tagihan_siswa}}".
 *
 * @property integer $id
 * @property integer $tahun_ajaran
 * @property string $jatuh_tempo
 * @property integer $id_siswa
 * @property integer $jenis_tagihan
 * @property string $total_tagihan
 * @property integer $status
 * @property integer $is_lunas
 *
 * @property PembayaranTagihan[] $pembayaranTagihans
 * @property TahunAjaran $tahunAjaran
 */
class TagihanSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tagihan_siswa}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tahun_ajaran', 'id_siswa', 'jenis_tagihan', 'status', 'is_lunas'], 'integer'],
            [['jatuh_tempo'], 'safe'],
            [['total_tagihan'], 'number'],
            [['tahun_ajaran'], 'exist', 'skipOnError' => true, 'targetClass' => TahunAjaran::className(), 'targetAttribute' => ['tahun_ajaran' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tahun_ajaran' => Yii::t('app', 'Tahun Ajaran'),
            'jatuh_tempo' => Yii::t('app', 'Jatuh Tempo'),
            'id_siswa' => Yii::t('app', 'Id Siswa'),
            'jenis_tagihan' => Yii::t('app', 'Jenis Tagihan'),
            'total_tagihan' => Yii::t('app', 'Total Tagihan'),
            'status' => Yii::t('app', 'Status'),
            'is_lunas' => Yii::t('app', 'Is Lunas'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPembayaranTagihans()
    {
        return $this->hasMany(PembayaranTagihan::className(), ['id_tagihan' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id' => 'tahun_ajaran']);
    }
}
