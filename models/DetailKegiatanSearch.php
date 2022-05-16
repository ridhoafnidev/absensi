<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailKegiatan;

/**
 * DetailKegiatanSearch represents the model behind the search form about `app\models\DetailKegiatan`.
 */
class DetailKegiatanSearch extends DetailKegiatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_detail_kegiatan', 'id_kegiatan'], 'integer'],
            [['nama_kegiatan', 'keterangan', 'jam', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = DetailKegiatan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_detail_kegiatan' => $this->id_detail_kegiatan,
            'id_kegiatan' => $this->id_kegiatan,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'nama_kegiatan', $this->nama_kegiatan])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'jam', $this->jam]);

        return $dataProvider;
    }
}
