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
            array(
                'attribute' => 'Status Absensi',
               'value' => $model->statusAbsensi->status_absensi,
            ),
            'tanggal_mulai',
            'tanggal_selesai',
            [
                'attribute' => 'dokumen_pendukung',
                'format' => 'html',
                'value' => function ($data) {
                    return \yii\helpers\Html::img('http://localhost/api-absensi-depag/public/dokumen-pendukung/'. $data['dokumen_pendukung'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'jenis_cuti',
            'lembur',
            'keterangan',
            'lat',
            'lng',
            'alamat_absensi:ntext',
            'created_at',
            'updated_at',
            array(
                'attribute' => 'Username',
               'value' => $model->user->username,
            ),
            'jenis_absensi',
        ],
    ]) ?>

</div>
