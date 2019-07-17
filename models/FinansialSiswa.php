<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%kondisi_fin_siswa}}".
 *
 * @property int $id
 * @property string $kondisi
 */
class FinansialSiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%golongan_siswa}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kondisi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kondisi' => Yii::t('app', 'Kondisi'),
        ];
    }

    public static function selectOptions()
    {
        $model = self::find()->all();
        return ArrayHelper::map($model,'id','kondisi');
    }
}
