<?php

namespace app\models;

use app\components\EmptyLogger;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%tahun_ajaran}}".
 *
 * @property int $id
 * @property string $tahun_ajaran
 * @property string $departemen
 * @property string $tanggal_mulai
 * @property string $tanggal_akhir
 * @property int $status
 * @property string $keterangan
 * @property string $info
 *
 * @property Semester[] $semester
 */
class TahunAjaran extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tahun_ajaran}}';
    }

    /**
     * @param bool $insert
     * @return bool
     * @throws \yii\db\Exception
     */
    public function beforeSave($insert)
    {
        if($insert){
            $command = Yii::$app->db->createCommand();
            $command->update($this::tableName(),['status' => 0])->execute();

        }
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    /**
     * @param bool  $insert
     * @param array $changedAttributes
     * @throws \yii\db\Exception
     */
    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes); // TODO: Change the autogenerated stub
        if($insert){
            $this->addSemester();
        }
    }

    private function addSemester()
    {

        $command = Yii::$app->db->createCommand();
        $command->update($this::tableName(),['status' => 0]);
        $list = [];
        for ($i=1;$i <= 2;$i++){
            $list[] = [$i,$this->id];
        }
        $command->batchInsert(Semester::tableName(),['semester','tahun_ajaran'],$list)->execute();
    }

    private function addSaldoRekening(){
        $command = Yii::$app->db->createCommand();
        $command->setSql("INSERT INTO keu_saldorekening(detilrekening,tahunajaran,nominal)
        SELECT 
        ");

    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_ajaran'],'unique'],
            [['tanggal_mulai', 'tanggal_akhir'], 'safe'],
            [['status'], 'integer'],
            [['keterangan', 'info'], 'string'],
            [['tahun_ajaran'], 'integer'],
            [['departemen'], 'string', 'max' => 5],
            [['info'],'default','value' => function(){
                $sampai = (int)$this->tahun_ajaran + 1;
                return "{$this->tahun_ajaran} - {$sampai}";
            }],
            [['status'],'default','value' => 1],
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSemester()
    {
        return $this->hasMany(Semester::className(),['tahun_ajaran'=>'id']);
    }

    public static function selectOptions()
    {
        return ArrayHelper::map(self::find()->asArray()->all(),'id','info');
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tahun_ajaran' => Yii::t('app', 'Tahun Ajaran'),
            'departemen' => Yii::t('app', 'Departemen'),
            'tanggal_mulai' => Yii::t('app', 'Tanggal Mulai'),
            'tanggal_akhir' => Yii::t('app', 'Tanggal Akhir'),
            'status' => Yii::t('app', 'Status'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'info' => Yii::t('app', 'Info'),
        ];
    }

    public static function getActive()
    {
        return self::find()->active()
            ->orderBy(['id' => SORT_DESC])
            ->one();
    }

    /**
     * @inheritdoc
     * @return TahunAjaranQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TahunAjaranQuery(get_called_class());
    }
}
