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
            //'user_id',
            'nik',
            'nip',
            'nama_lengkap',
            [
                'attribute' => 'foto',
                'format' => 'html',
                'value' => function ($data) {
                    return \yii\helpers\Html::img('http://localhost/api-absensi-depag/public/profile/'. $data['foto'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'email:email',
            'no_hp',
            array(
                 'attribute' => 'pns_nonpns_id',
                'value' => $model->pnsNonpns->pns_nonpns,
            ),
            array(
                 'attribute' => 'jenis_tenaga_id',
                'value' => $model->jenisTenaga->jenis_tenaga,
            ),
            array(
                 'attribute' => 'unit_kerja_id',
                'value' => $model->unitKerja->unit_kerja,
            ),
            array(
                 'attribute' => 'jabatan_struktural_id',
                'value' => $model->jabatanStruktural->jabatan_struktural,
            ),
            array(
                 'attribute' => 'jabatan_fungsional_id',
                'value' => $model->jabatanFungsional->jabatan_fungsional,
            ),
            array(
                 'attribute' => 'pangkat_golongan_id',
                'value' => $model->pangkatGolongan->pangkat_golongan,
            ),
            'is_active',
            'grade',
            'tunjangan',
        ],
    ]) ?>

</div>
