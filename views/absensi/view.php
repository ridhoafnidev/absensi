<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */

$this->title = "Update Absensi";
$this->params['breadcrumbs'][] = ['label' => 'Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id_absensi;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-absensi-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_absensi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_absensi], [
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
            /*'id_absensi',*/
            [
                'attribute' => 'office_id',
                'value' => $model->unitKerja->unit_kerja
            ],
            'date_absensi',
            'time_absensi',
            [
                'attribute' => 'status_absensi_id',
                'value' => $model->statusAbsensi->status_absensi
            ],
            'tanggal_mulai',
            'tanggal_selesai',
            [
                'attribute' => 'dokumen_pendukung',
                'format' => 'html',
                'value' => function ($data) {
                    if ($data->dokumen_pendukung != "") {
                        return '<a href="http://localhost/api-absensi-depag/public/dokumen-pendukung/$data->dokumen_pendukung" target="_blank" class="btn btn-info">Lihat Dokumen</a>';
                    }
                    else {
                        return "-";
                    }

                },
            ],
            'jenis_cuti',
            [
                'attribute' => 'lembur',
                'value' => function($data) {
                    if ($data->lembur == 1) {
                        return "Iya";
                    }
                    else {
                        return "Tidak";
                    }

                }
            ],
            'keterangan',
            'lat',
            'lng',
            'alamat_absensi:ntext',
            [
                'attribute' => 'user_id',
                'value' => $model->user->tbPegawais->nama_lengkap
            ],
            'jenis_absensi',
            'terlambat',
            'plg_cepat',
            'anak_ke',
            'created_at',
        ],
    ]) ?>

</div>
