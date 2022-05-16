<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FasilitasTpa;

/**
 * FasilitasTpaSearch represents the model behind the search form about `app\models\FasilitasTpa`.
 */
class FasilitasTpaSearch extends FasilitasTpa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_fasilitas_tpa', 'id_fasilitas'], 'integer'],
            [['npsn', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = FasilitasTpa::find();

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
            'id_fasilitas_tpa' => $this->id_fasilitas_tpa,
            'id_fasilitas' => $this->id_fasilitas,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'npsn', $this->npsn]);

        return $dataProvider;
    }
}
