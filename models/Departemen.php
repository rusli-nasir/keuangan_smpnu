<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%departemen}}".
 *
 * @property int $id
 * @property string $departemen
 * @property int $urutan
 * @property string $keterangan
 *
 * @property Semester[] $semesters
 */
class Departemen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%departemen}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['urutan'], 'integer'],
            [['keterangan'], 'string'],
            [['departemen'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'departemen' => Yii::t('app', 'Departemen'),
            'urutan' => Yii::t('app', 'Urutan'),
            'keterangan' => Yii::t('app', 'Keterangan'),
        ];
    }

    public static function selectOptions(){
        $model = self::find()->all();
        return ArrayHelper::map($model,'id','departemen');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemesters()
    {
        return $this->hasMany(Semester::className(), ['id_departemen' => 'id']);
    }
}
