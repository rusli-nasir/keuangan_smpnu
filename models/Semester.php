<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%semester}}".
 *
 * @property int $id
 * @property string $semester
 * @property int $id_departemen
 * @property int $status
 * @property string $keterangan
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 *
 * @property Departemen $departemen
 * @property int        $tahun_ajaran [int(11)]
 * @property TahunAjaran $idTahunajaran
 */
class Semester extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%semester}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_departemen','tahun_ajaran', 'status'], 'integer'],
            [['keterangan'], 'string'],
            [['tanggal_mulai', 'tanggal_selesai'], 'safe'],
            [['semester'], 'string', 'max' => 100],
            [['id_departemen'], 'exist', 'skipOnError' => true, 'targetClass' => Departemen::className(), 'targetAttribute' => ['id_departemen' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'semester' => Yii::t('app', 'Semester'),
            'id_departemen' => Yii::t('app', 'Departemen'),
            'tahun_ajaran' => Yii::t('app', 'Tahun Ajaran'),
            'status' => Yii::t('app', 'Status'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'tanggal_mulai' => Yii::t('app', 'Tanggal Mulai'),
            'tanggal_selesai' => Yii::t('app', 'Tanggal Selesai'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartemen()
    {
        return $this->hasOne(Departemen::className(), ['id' => 'id_departemen']);
    }

    public function getNameSemester()
    {
        if($this->semester % 2 == 0){
           return 'Semester Genap';
        }else{
            return 'Semester Ganjil';
        }
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id' => 'tahun_ajaran']);
    }
}
