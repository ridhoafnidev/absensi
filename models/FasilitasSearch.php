<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fasilitas;

/**
 * FasilitasSearch represents the model behind the search form about `app\models\Fasilitas`.
 */
class FasilitasSearch extends Fasilitas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_fasilitas', 'npsn'], 'integer'],
            [['nama_fasilitas', 'createdAt', 'updatedAt'], 'safe'],
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
        // $query = Fasilitas::find();
        $query = (new \yii\db\Query())
        ->select([
            'fasilitas',
            'fasilitas_tpa',
        ])
        ->from('fasilitas')
        ->rightjoin('fasilitas_tpa', 'fasilitas_tpa.id_fasilitas = fasilitas.id_fasilitas');
        

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
            'id_fasilitas' => $this->id_fasilitas,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'nama_fasilitas', $this->nama_fasilitas]);

        return $dataProvider;
    }
}
