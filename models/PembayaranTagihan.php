<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pembayaran_tagihan}}".
 *
 * @property integer $id
 * @property integer $id_tagihan
 * @property string $tanggal_bayar
 * @property string $total_bayar
 *
 * @property TagihanSiswa $idTagihan
 */
class PembayaranTagihan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pembayaran_tagihan}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'id_tagihan'], 'integer'],
            [['tanggal_bayar'], 'safe'],
            [['total_bayar'], 'number'],
            [['id_tagihan'], 'exist', 'skipOnError' => true, 'targetClass' => TagihanSiswa::className(), 'targetAttribute' => ['id_tagihan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_tagihan' => Yii::t('app', 'Id Tagihan'),
            'tanggal_bayar' => Yii::t('app', 'Tanggal Bayar'),
            'total_bayar' => Yii::t('app', 'Total Bayar'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTagihan()
    {
        return $this->hasOne(TagihanSiswa::className(), ['id' => 'id_tagihan']);
    }
}
