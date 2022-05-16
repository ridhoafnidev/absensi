<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TbAbsensi;

/**
 * TbAbsensiSearch represents the model behind the search form about `app\models\TbAbsensi`.
 */
class TbAbsensiSearch extends TbAbsensi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_absensi', 'status_absensi_id', 'user_id'], 'integer'],
            [['date_absensi', 'time_absensi', 'tanggal_mulai', 'tanggal_selesai', 'dokumen_pendukung', 'jenis_cuti', 'lembur', 'keterangan', 'alamat_absensi', 'created_at', 'updated_at', 'jenis_absensi'], 'safe'],
            [['lat', 'lng'], 'number'],
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
        $query = TbAbsensi::find();

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
            'id_absensi' => $this->id_absensi,
            'date_absensi' => $this->date_absensi,
            'time_absensi' => $this->time_absensi,
            'status_absensi_id' => $this->status_absensi_id,
            'lat' => $this->lat,
            'lng' => $this->lng,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'tanggal_mulai', $this->tanggal_mulai])
            ->andFilterWhere(['like', 'tanggal_selesai', $this->tanggal_selesai])
            ->andFilterWhere(['like', 'dokumen_pendukung', $this->dokumen_pendukung])
            ->andFilterWhere(['like', 'jenis_cuti', $this->jenis_cuti])
            ->andFilterWhere(['like', 'lembur', $this->lembur])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'alamat_absensi', $this->alamat_absensi])
            ->andFilterWhere(['like', 'jenis_absensi', $this->jenis_absensi]);

        return $dataProvider;
    }
}
