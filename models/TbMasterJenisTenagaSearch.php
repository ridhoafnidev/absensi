<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterJenisTenaga;

/**
 * TbMasterJenisTenagaSearch represents the model behind the search form about `app\models\TbMasterJenisTenaga`.
 */
class TbMasterJenisTenagaSearch extends TbMasterJenisTenaga
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_master_jenis_tenaga'], 'integer'],
            [['jenis_tenaga'], 'safe'],
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
        $query = TbMasterJenisTenaga::find();

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
            'id_master_jenis_tenaga' => $this->id_master_jenis_tenaga,
        ]);

        $query->andFilterWhere(['like', 'jenis_tenaga', $this->jenis_tenaga]);

        return $dataProvider;
    }
}
