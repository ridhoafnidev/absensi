<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tpa;

/**
 * TpaSearch represents the model behind the search form about `app\models\Tpa`.
 */
class TpaSearch extends Tpa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tpa', 'id_pengelola'], 'integer'],
            [['npsn', 'nama_lokasi', 'alamat', 'foto_1', 'foto_2', 'foto_3', 'status', 'createdAt', 'updatedAt'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Tpa::find();

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
            'id_tpa' => $this->id_tpa,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'id_pengelola' => $this->id_pengelola,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'npsn', $this->npsn])
            ->andFilterWhere(['like', 'nama_lokasi', $this->nama_lokasi])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'foto_1', $this->foto_1])
            ->andFilterWhere(['like', 'foto_2', $this->foto_2])
            ->andFilterWhere(['like', 'foto_3', $this->foto_3])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
