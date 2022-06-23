<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterPangkatGolongan;

/**
 * TbMasterPangkatGolonganSearch represents the model behind the search form of `app\models\TbMasterPangkatGolongan`.
 */
class TbMasterPangkatGolonganSearch extends TbMasterPangkatGolongan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pangkat_golongan'], 'integer'],
            [['pangkat_golongan'], 'safe'],
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
        $query = TbMasterPangkatGolongan::find();

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
            'id_pangkat_golongan' => $this->id_pangkat_golongan,
        ]);

        $query->andFilterWhere(['like', 'pangkat_golongan', $this->pangkat_golongan]);

        return $dataProvider;
    }
}
