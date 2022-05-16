<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */
?>
<div class="tb-absensi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_absensi',
            'date_absensi',
            'time_absensi',
            'status_absensi_id',
            'tanggal_mulai',
            'tanggal_selesai',
            'dokumen_pendukung',
            'jenis_cuti',
            'lembur',
            'keterangan',
            'lat',
            'lng',
            'alamat_absensi:ntext',
            'created_at',
            'updated_at',
            'user_id',
            'jenis_absensi',
        ],
    ]) ?>

</div>
