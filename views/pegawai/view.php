<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */

$this->title = $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Tb Pegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-pegawai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            'user_id',
            'office_id',
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
            'grade',
            'tunjangan',
        ],
    ]) ?>

</div>
