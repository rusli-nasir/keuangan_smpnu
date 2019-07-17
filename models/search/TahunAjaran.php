<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TahunAjaran as TahunAjaranModel;

/**
 * TahunAjaran represents the model behind the search form about `app\models\TahunAjaran`.
 */
class TahunAjaran extends TahunAjaranModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['tahun_ajaran', 'departemen', 'tanggal_mulai', 'tanggal_akhir', 'keterangan', 'info'], 'safe'],
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
        $query = TahunAjaranModel::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['id'=>SORT_DESC]]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal_mulai' => $this->tanggal_mulai,
            'tanggal_akhir' => $this->tanggal_akhir,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'tahun_ajaran', $this->tahun_ajaran])
            ->andFilterWhere(['like', 'departemen', $this->departemen])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'info', $this->info]);

        return $dataProvider;
    }
}
