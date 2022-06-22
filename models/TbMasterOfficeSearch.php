<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterOffice;

/**
 * TbMasterOfficeSearch represents the model behind the search form of `app\models\TbMasterOffice`.
 */
class TbMasterOfficeSearch extends TbMasterOffice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_office'], 'integer'],
            [['office_name', 'office_address', 'created_at', 'updated_at'], 'safe'],
            [['lat', 'lng'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = TbMasterOffice::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_master_office' => $this->id_master_office,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'office_name', $this->office_name])
            ->andFilterWhere(['like', 'office_address', $this->office_address]);

        return $dataProvider;
    }
}
