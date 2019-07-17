<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%angsuran}}".
 *
 * @property string $replid
 * @property integer $angsuran
 * @property string $keterangan
 */
class Angsuran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%angsuran}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['angsuran', 'keterangan'], 'required'],
            [['angsuran'], 'integer'],
            [['keterangan'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'replid' => Yii::t('app', 'Replid'),
            'angsuran' => Yii::t('app', 'Angsuran'),
            'keterangan' => Yii::t('app', 'Keterangan'),
        ];
    }
}
