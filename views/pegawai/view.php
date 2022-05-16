<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */
?>
<div class="tb-pegawai-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            'user_id',
            'nik',
            'nip',
            'nama_lengkap',
            'foto',
            'email:email',
            'no_hp',
            'pns_nonpns_id',
            'jenis_tenaga_id',
            'unit_kerja_id',
            'jabatan_struktural_id',
            'jabatan_fungsional_id',
            'pangkat_golongan_id',
            'is_active',
        ],
    ]) ?>

</div>
