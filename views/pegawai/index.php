<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbPegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // [
            //     'attribute' => 'id_pegawai',
            //     'headerOptions' => ['style' => 'background-color:#ccf8fe'],
            // ],

            //'id_pegawai',
            //'user_id',
            'office_id',
            'nik',
            'nip',
            'nama_lengkap',
            //'foto',
            //'email:email',
            //'no_hp',
            //'pns_nonpns_id',
            //'jenis_tenaga_id',
            //'unit_kerja_id',
            //'jabatan_struktural_id',
            //'jabatan_fungsional_id',
            //'pangkat_golongan_id',
            //'is_active',
            //'grade',
            //'tunjangan',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'delete' => function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id_pegawai], [
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
