<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%golongan_siswa}}".
 *
 * @property integer $id
 * @property string $kondisi
 *
 * @property PsbDetailbiaya[] $psbDetailbiayas
 */
class GolonganSiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%golongan_siswa}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kondisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kondisi' => Yii::t('app', 'Kondisi'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPsbDetailbiayas()
    {
        return $this->hasMany(PsbDetailbiaya::className(), ['golongan' => 'id']);
    }
}
