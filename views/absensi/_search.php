<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-absensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_absensi') ?>

    <?= $form->field($model, 'office_id') ?>

    <?= $form->field($model, 'date_absensi') ?>

    <?= $form->field($model, 'time_absensi') ?>

    <?= $form->field($model, 'status_absensi_id') ?>

    <?php // echo $form->field($model, 'tanggal_mulai') ?>

    <?php // echo $form->field($model, 'tanggal_selesai') ?>

    <?php // echo $form->field($model, 'dokumen_pendukung') ?>

    <?php // echo $form->field($model, 'jenis_cuti') ?>

    <?php // echo $form->field($model, 'lembur') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'lat') ?>

    <?php // echo $form->field($model, 'lng') ?>

    <?php // echo $form->field($model, 'alamat_absensi') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'jenis_absensi') ?>

    <?php // echo $form->field($model, 'terlambat') ?>

    <?php // echo $form->field($model, 'plg_cepat') ?>

    <?php // echo $form->field($model, 'anak_ke') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
