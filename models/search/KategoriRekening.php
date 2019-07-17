<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KategoriRekening as KategoriRekeningModel;

/**
 * KategoriRekening represents the model behind the search form about `app\models\KategoriRekening`.
 */
class KategoriRekening extends KategoriRekeningModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['replid', 'kode'], 'integer'],
            [['nama', 'jenis', 'jenistambah', 'jeniskurang'], 'safe'],
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
        $query = KategoriRekeningModel::find();

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
            'kode' => $this->kode,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'jenistambah', $this->jenistambah])
            ->andFilterWhere(['like', 'jeniskurang', $this->jeniskurang]);

        return $dataProvider;
    }
}
