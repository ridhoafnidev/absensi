<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pendaftaran;

/**
 * PendaftaranSearch represents the model behind the search form about `app\models\Pendaftaran`.
 */
class PendaftaranSearch extends Pendaftaran
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tpa_id', 'ortu_id', 'usia_ortu', 'nama_anak'], 'integer'],
            [['nama_tpa', 'alamat', 'nama_ortu', 'pekerjaan_ortu', 'alamat_ortu', 'tempat_lahir', 'tgl_lahir', 'nomor_akta', 'jenis_kelamin', 'alasan_masuk_tpa', 'tanggal_pendaftaran'], 'safe'],
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
        $query = Pendaftaran::find();

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
            'id' => $this->id,
            'tpa_id' => $this->tpa_id,
            'alamat' => $this->alamat,
            'ortu_id' => $this->ortu_id,
            'usia_ortu' => $this->usia_ortu,
            'nama_anak' => $this->nama_anak,
            'tgl_lahir' => $this->tgl_lahir,
            'tanggal_pendaftaran' => $this->tanggal_pendaftaran,
        ]);

        $query->andFilterWhere(['like', 'nama_tpa', $this->nama_tpa])
            ->andFilterWhere(['like', 'nama_ortu', $this->nama_ortu])
            ->andFilterWhere(['like', 'pekerjaan_ortu', $this->pekerjaan_ortu])
            ->andFilterWhere(['like', 'alamat_ortu', $this->alamat_ortu])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'nomor_akta', $this->nomor_akta])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alasan_masuk_tpa', $this->alasan_masuk_tpa]);

        return $dataProvider;
    }
}
