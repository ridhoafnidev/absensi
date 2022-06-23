<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbAbsensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-absensi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_absensi',
            //'office_id',
            'date_absensi',
            'time_absensi',
            // 'status_absensi_id',
            [
                'attribute'=>'status_absensi_id',
                'label' => 'Status Absensi',
                'value' => function($model) {
                    return $model->statusAbsensi->status_absensi;
                }
            ],
            //'tanggal_mulai',
            //'tanggal_selesai',
            //'dokumen_pendukung',
            //'jenis_cuti',
            //'lembur',
            [
                'attribute' => 'lembur',
                'value' => function ($model) {
                    if($model->lembur!=0){
                        return "iya";
                    }else{
                        return "tidak";
                    }
                },
            ],
            //'keterangan',
            //'lat',
            //'lng',
            //'alamat_absensi:ntext',
            //'created_at',
            //'updated_at',
            //'user_id',
            [
                'label' =>  'Nama Pegawai',
                'attribute' => 'user_id',
                'value' => function ($model) {
                    return $model->user->tbPegawais->nama_lengkap;
                },
            ],
            //'jenis_absensi',
            //'terlambat',
            //'plg_cepat',
            //'anak_ke',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'delete' => function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id_absensi], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'apakah anda yakin data dihapus?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>


</div>
