<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Biaya;

/**
 * BiayaSearch represents the model behind the search form about `app\models\Biaya`.
 */
class BiayaSearch extends Biaya
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_biaya'], 'integer'],
            [['npsn', 'jenis_biaya', 'jenis_penitipan', 'rentang_umur', 'total_biaya', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = Biaya::find();

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
            'id_biaya' => $this->id_biaya,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'npsn', $this->npsn])
            ->andFilterWhere(['like', 'jenis_biaya', $this->jenis_biaya])
            ->andFilterWhere(['like', 'jenis_penitipan', $this->jenis_penitipan])
            ->andFilterWhere(['like', 'rentang_umur', $this->rentang_umur])
            ->andFilterWhere(['like', 'total_biaya', $this->total_biaya]);

        return $dataProvider;
    }
}
