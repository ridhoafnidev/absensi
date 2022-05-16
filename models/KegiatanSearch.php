<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kegiatan;

/**
 * KegiatanSearch represents the model behind the search form about `app\models\Kegiatan`.
 */
class KegiatanSearch extends Kegiatan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kegiatan'], 'integer'],
            [['npsn', 'tanggal_kegiatan', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = Kegiatan::find();

        // $query = (new \yii\db\Query())
        // ->select(['kegiatan', 'detail_kegiatan'])
        // ->from('kegiatan')
        // ->leftjoin('kegiatan', 'kegiatan.id_kegiatan = detail_kegiatan.id_kegiatan')
        // ->where('jadwal')

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
            'id_kegiatan' => $this->id_kegiatan,
            'tanggal_kegiatan' => $this->tanggal_kegiatan,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['like', 'npsn', $this->npsn]);

        return $dataProvider;
    }
}
