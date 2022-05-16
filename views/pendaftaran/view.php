<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaran */
?>
<div class="pendaftaran-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tpa_id',
            'nama_tpa',
            'alamat',
            'ortu_id',
            'nama_ortu',
            'usia_ortu',
            'pekerjaan_ortu',
            'alamat_ortu',
            'nama_anak',
            'tempat_lahir',
            'tgl_lahir',
            'nomor_akta',
            'jenis_kelamin',
            'alasan_masuk_tpa:ntext',
            'tanggal_pendaftaran',
        ],
    ]) ?>

</div>
