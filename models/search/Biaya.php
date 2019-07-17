<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biaya as BiayaModel;

/**
 * Biaya represents the model behind the search form about `app\models\Biaya`.
 */
class Biaya extends BiayaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['replid', 'isAngsur', 'isDiskon'], 'integer'],
            [['biaya', 'kode', 'ditagih', 'keterangan'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = BiayaModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'replid' => $this->replid,
            'isAngsur' => $this->isAngsur,
            'isDiskon' => $this->isDiskon,
        ]);

        $query->andFilterWhere(['like', 'biaya', $this->biaya])
            ->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'ditagih', $this->ditagih])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
