<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrtuTpa;

/**
 * OrtuTpaSearch represents the model behind the search form about `app\models\OrtuTpa`.
 */
class OrtuTpaSearch extends OrtuTpa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ortu_tpa', 'id_ortu'], 'integer'],
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
        $query = OrtuTpa::find();

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
            'id_ortu_tpa' => $this->id_ortu_tpa,
            'id_ortu' => $this->id_ortu,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'npsn', $this->npsn]);

        return $dataProvider;
    }
}
