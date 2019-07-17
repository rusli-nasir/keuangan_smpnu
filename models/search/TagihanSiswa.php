<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TagihanSiswa as TagihanSiswaModel;

/**
 * TagihanSiswa represents the model behind the search form about `app\models\TagihanSiswa`.
 */
class TagihanSiswa extends TagihanSiswaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tahun_ajaran', 'id_siswa', 'jenis_tagihan', 'status', 'is_lunas'], 'integer'],
            [['jatuh_tempo'], 'safe'],
            [['total_tagihan'], 'number'],
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
        $query = TagihanSiswaModel::find();

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
            'tahun_ajaran' => $this->tahun_ajaran,
            'jatuh_tempo' => $this->jatuh_tempo,
            'id_siswa' => $this->id_siswa,
            'jenis_tagihan' => $this->jenis_tagihan,
            'total_tagihan' => $this->total_tagihan,
            'status' => $this->status,
            'is_lunas' => $this->is_lunas,
        ]);

        return $dataProvider;
    }
}
