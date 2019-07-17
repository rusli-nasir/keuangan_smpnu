<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detilrekening as DetilrekeningModel;

/**
 * Detilrekening represents the model behind the search form about `app\models\Detilrekening`.
 */
class Detilrekening extends DetilrekeningModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['replid', 'kategorirekening'], 'integer'],
            [['kode', 'nama', 'keterangan'], 'safe'],
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
        $query = DetilrekeningModel::find()->codeOrdered();

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
            'kategorirekening' => $this->kategorirekening,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
