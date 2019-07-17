<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%keu_saldorekening}}".
 *
 * @property integer $replid
 * @property integer $detilrekening
 * @property integer $tahunajaran
 * @property double $nominal
 *
 * @property Detilrekening $idDetilrekening
 * @property TahunAjaran $idTahunAjaran
 */
class Saldorekening extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%keu_saldorekening}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detilrekening', 'tahunajaran'], 'required'],
            [['detilrekening', 'tahunajaran'], 'integer'],
            [['nominal'], 'number'],
            [['detilrekening'], 'exist', 'skipOnError' => true, 'targetClass' => Detilrekening::className(), 'targetAttribute' => ['detilrekening' => 'replid']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'replid' => Yii::t('app', 'Replid'),
            'detilrekening' => Yii::t('app', 'Detilrekening'),
            'tahunajaran' => Yii::t('app', 'Tahunajaran'),
            'nominal' => Yii::t('app', 'Nominal'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDetilrekening()
    {
        return $this->hasOne(Detilrekening::className(), ['replid' => 'detilrekening']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTahunAjaran()
    {
        return $this->hasOne(TahunAjaran::className(), ['id' => 'tahunajaran']);
    }
}
