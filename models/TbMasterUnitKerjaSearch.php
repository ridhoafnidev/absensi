<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterUnitKerja;

/**
 * TbMasterUnitKerjaSearch represents the model behind the search form about `app\models\TbMasterUnitKerja`.
 */
class TbMasterUnitKerjaSearch extends TbMasterUnitKerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_master_unit_kerja'], 'integer'],
            [['unit_kerja'], 'safe'],
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
        $query = TbMasterUnitKerja::find();

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
            'id_master_unit_kerja' => $this->id_master_unit_kerja,
        ]);

        $query->andFilterWhere(['like', 'unit_kerja', $this->unit_kerja]);

        return $dataProvider;
    }
}
