<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tingkat as TingkatModel;

/**
 * Tingkat represents the model behind the search form about `app\models\Tingkat`.
 */
class Tingkat extends TingkatModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_departemen', 'status', 'urutan'], 'integer'],
            [['tingkat', 'keterangan'], 'safe'],
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
        $query = TingkatModel::find()->orderBy(['urutan'=> SORT_ASC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_departemen' => $this->id_departemen,
            'status' => $this->status,
            'urutan' => $this->urutan,
        ]);

        $query->andFilterWhere(['like', 'tingkat', $this->tingkat])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
