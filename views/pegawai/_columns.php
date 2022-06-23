<?php
use yii\helpers\Url;

return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
//        [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'id_pegawai',
//    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'user_id',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nik',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nip',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama_lengkap',
    ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'foto',
    // ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'email',
     ],
     [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'no_hp',
     ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'pns_nonpns_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'jenis_tenaga_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'unit_kerja_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'jabatan_struktural_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'jabatan_fungsional_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'pangkat_golongan_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'is_active',
    // ],
    [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
        'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'apakah yakin ingin menghapus?'], 
    ],

];   