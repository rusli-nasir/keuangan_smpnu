<?php

namespace app\models\search;

use Yii;
use app\models\DetailBiaya as DetailBiayaModel;
use yii\data\ActiveDataProvider;
use yii\db\Expression;

/**
 * This is the model class for table "{{%psb_detailbiaya}}".
 *
 * @property integer $replid
 * @property integer $biaya
 * @property string $nominal
 * @property integer $subtingkat
 * @property integer $golongan
 * @property integer $detailgelombang
 * @property integer $detilrekening
 */
class DetailBiaya extends DetailBiayaModel
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['biaya', 'nominal', 'detilrekening'], 'required'],
            [['biaya', 'subtingkat', 'golongan', 'detailgelombang', 'detilrekening'], 'integer'],
            [['nominal'], 'number'],
        ];
    }

    public function search($params)
    {
        $tblBiaya = \app\models\Biaya::tableName();
        $query = DetailBiayaModel::find()
            ->select([
                self::tableName().'.*',
                $tblBiaya.'.biaya',
                'used' => new Expression('')
            ])
            ->joinWith(['idBiaya','idSubTingkat','idGolongan']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'golongan' => $this->golongan,
            'subtingkat' => $this->subtingkat,
            'isDiskon' => $this->isDiskon,
        ]);

    }
}
