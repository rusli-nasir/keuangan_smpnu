<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subtingkat as SubtingkatModel;

/**
 * Subtingkat represents the model behind the search form about `app\models\Subtingkat`.
 */
class Subtingkat extends SubtingkatModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['replid', 'tingkat', 'urutan'], 'integer'],
            [['subtingkat', 'keterangan'], 'safe'],
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
        $query = SubtingkatModel::find();

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
            'tingkat' => $this->tingkat,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'subtingkat', $this->subtingkat])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
