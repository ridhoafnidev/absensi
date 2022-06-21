<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */

$this->title = $model->id_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-absensi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_absensi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_absensi], [
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
            'id_absensi',
            'office_id',
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
            'terlambat',
            'plg_cepat',
            'anak_ke',
        ],
    ]) ?>

</div>
