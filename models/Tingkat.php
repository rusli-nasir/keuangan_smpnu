<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%tingkat}}".
 *
 * @property int $id
 * @property string $tingkat
 * @property int $id_departemen
 * @property int $status
 * @property string $keterangan
 * @property int $urutan
 */
class Tingkat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tingkat}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_departemen', 'status', 'urutan'], 'integer'],
            [['keterangan'], 'string'],
            [['tingkat'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tingkat' => Yii::t('app', 'Tingkat'),
            'id_departemen' => Yii::t('app', 'Id Departemen'),
            'status' => Yii::t('app', 'Status'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'urutan' => Yii::t('app', 'Urutan'),
        ];
    }

    public static function selectOptions()
    {
        $model = Tingkat::find()->all();
        return ArrayHelper::map($model,'id','tingkat');
    }

}
