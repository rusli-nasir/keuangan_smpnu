<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Viabayar as ViabayarModel;

/**
 * Viabayar represents the model behind the search form about `app\models\Viabayar`.
 */
class Viabayar extends ViabayarModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['replid'], 'integer'],
            [['viabayar', 'keterangan'], 'safe'],
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
        $query = ViabayarModel::find();

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
        ]);

        $query->andFilterWhere(['like', 'viabayar', $this->viabayar])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
