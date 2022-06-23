<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterJabatanStruktural;

/**
 * TbMasterJabatanStrukturalSearch represents the model behind the search form of `app\models\TbMasterJabatanStruktural`.
 */
class TbMasterJabatanStrukturalSearch extends TbMasterJabatanStruktural
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_jabatan_struktural'], 'integer'],
            [['jabatan_struktural'], 'safe'],
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
        $query = TbMasterJabatanStruktural::find();

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
            'id_master_jabatan_struktural' => $this->id_master_jabatan_struktural,
        ]);

        $query->andFilterWhere(['like', 'jabatan_struktural', $this->jabatan_struktural]);

        return $dataProvider;
    }
}
