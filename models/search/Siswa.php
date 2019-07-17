<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siswa as SiswaModel;

/**
 * Siswa represents the model behind the search form about `app\models\Siswa`.
 */
class Siswa extends SiswaModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'tahun_masuk', 'id_angkatan', 'id_kelas'], 'integer'],
            [['nis', 'nisn', 'nik', 'no_un', 'nama', 'panggilan', 'kondisi_finansial', 'kelamin', 'tempat', 'tanggal_lahir'], 'safe'],
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
        $query = SiswaModel::find();

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
            'status' => $this->status,
            'tahun_masuk' => $this->tahun_masuk,
            'id_angkatan' => $this->id_angkatan,
            'id_kelas' => $this->id_kelas,
            'tanggal_lahir' => $this->tanggal_lahir,
        ]);

        $query->andFilterWhere(['like', 'nis', $this->nis])
            ->andFilterWhere(['like', 'nisn', $this->nisn])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'no_un', $this->no_un])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'panggilan', $this->panggilan])
            ->andFilterWhere(['like', 'kondisi_finansial', $this->kondisi_finansial])
            ->andFilterWhere(['like', 'kelamin', $this->kelamin])
            ->andFilterWhere(['like', 'tempat', $this->tempat]);

        return $dataProvider;
    }
}
