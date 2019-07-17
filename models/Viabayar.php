<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%viabayar}}".
 *
 * @property integer $replid
 * @property string $viabayar
 * @property string $keterangan
 */
class Viabayar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%viabayar}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['viabayar', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['viabayar'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'replid' => Yii::t('app', 'Replid'),
            'viabayar' => Yii::t('app', 'Viabayar'),
            'keterangan' => Yii::t('app', 'Keterangan'),
        ];
    }
}
