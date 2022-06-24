<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */

$this->title = $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-pegawai-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin ingin menghapus data ini..?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            [
                'attribute' => 'user_id',
                'label' => 'Username',
                'value' => $model->user->username
            ],
            [
                'attribute' => 'office_id',
                'value' => $model->unitKerja->unit_kerja
            ],
            'nik',
            'nip',
            'nama_lengkap',
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function($data) {
                    return Html::img('http://localhost/api-absensi-depag/public/profile/'.$data->foto, ['width' => '100px', 'height' => '100%']);
                }
            ],
            'email:email',
            'no_hp',
            [
                'attribute' => 'pns_nonpns_id',
                'value' => $model->pnsNonpns->pns_nonpns
            ],
            [
                'attribute' => 'jenis_tenaga_id',
                'value' => $model->jenisTenaga->jenis_tenaga
            ],
            [
                 'attribute' => 'unit_kerja_id',
                 'value' => $model->unitKerja->unit_kerja
            ],
            [
                'attribute' => 'jabatan_struktural_id',
                'value' => $model->jabatanStruktural->jabatan_struktural
            ],
            [
                'attribute' => 'jabatan_fungsional_id',
                'value' => $model->jabatanFungsional->jabatan_fungsional
            ],
            [
                'attribute' => 'pangkat_golongan_id',
                'value' => $model->pangkatGolongan->pangkat_golongan
            ],
            [
                'attribute' => 'is_active',
                'value' => function($data) {
                    if ($data->is_active == 0) {
                        return "Tidak Aktif";
                    }
                    else {
                        return "Aktif";
                    }
                }
            ],
            'grade',
            [
                'attribute' => 'tunjangan',
                'value' => function($data) {
                    return "Rp. ".number_format($data->tunjangan);
                }
            ]
        ],
    ]) ?>

</div>
