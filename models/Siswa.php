<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%siswa}}".
 *
 * @property string $id
 * @property string $nis
 * @property string $nisn
 * @property string $nik
 * @property string $no_un
 * @property string $nama
 * @property string $panggilan
 * @property int $status
 * @property int $tahun_masuk
 * @property int $id_angkatan
 * @property int $id_kelas
 * @property string $kondisi_finansial
 * @property string $kelamin
 * @property string $tempat
 * @property string $tanggal_lahir
 *
 * @property Subtingkat $kelas
 * @property FinansialSiswa $idKodisiFinansial
 * @property RiwayatDepartemenSiswa[] $riwayatDepartemenSiswas
 */
class Siswa extends \yii\db\ActiveRecord
{

    const STATUS_NON_AKTIF = 0;
    const STATUS_AKTIF = 1;
    const STATUS_LULUS = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%siswa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'tahun_masuk', 'id_angkatan', 'id_kelas'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['nis'], 'string', 'max' => 20],
            [['nisn', 'nik', 'no_un', 'tempat'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 255],
            [['panggilan'], 'string', 'max' => 30],
            [['kondisi_finansial'], 'string', 'max' => 100],
            [['kelamin'], 'string', 'max' => 1],
            [['status'],'default','value' => self::STATUS_AKTIF],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nis' => Yii::t('app', 'Nis'),
            'nisn' => Yii::t('app', 'Nisn'),
            'nik' => Yii::t('app', 'Nik'),
            'no_un' => Yii::t('app', 'No Un'),
            'nama' => Yii::t('app', 'Nama'),
            'panggilan' => Yii::t('app', 'Panggilan'),
            'status' => Yii::t('app', 'Status'),
            'tahun_masuk' => Yii::t('app', 'Tahun Masuk'),
            'id_angkatan' => Yii::t('app', 'Id Angkatan'),
            'id_kelas' => Yii::t('app', 'Id Kelas'),
            'kondisi_finansial' => Yii::t('app', 'Kondisi Finansial'),
            'kelamin' => Yii::t('app', 'Kelamin'),
            'tempat' => Yii::t('app', 'Tempat'),
            'tanggal_lahir' => Yii::t('app', 'Tanggal Lahir'),
        ];
    }

    public function getIdKodisiFinansial()
    {
        return $this->hasOne(FinansialSiswa::className(),['id'=> 'kondisi_finansial']);
    }

    public function getKelas()
    {
        return $this->hasOne(Subtingkat::className(),['replid'=> 'id_kelas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatDepartemenSiswas()
    {
        return $this->hasMany(RiwayatDepartemenSiswa::className(), ['id_siswa' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return SiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SiswaQuery(get_called_class());
    }
}
