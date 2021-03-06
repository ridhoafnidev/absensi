<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbMasterJamKerja;

/**
 * TbMasterJamKerjaSearch represents the model behind the search form about `app\models\TbMasterJamKerja`.
 */
class TbMasterJamKerjaSearch extends TbMasterJamKerja
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_jam_kerja'], 'integer'],
            [['hari', 'jam'], 'safe'],
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
        $query = TbMasterJamKerja::find();

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
            'id_jam_kerja' => $this->id_jam_kerja,
        ]);

        $query->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'jam', $this->jam]);

        return $dataProvider;
    }
}
