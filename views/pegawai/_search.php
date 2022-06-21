<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'office_id') ?>

    <?= $form->field($model, 'nik') ?>

    <?= $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'nama_lengkap') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'no_hp') ?>

    <?php // echo $form->field($model, 'pns_nonpns_id') ?>

    <?php // echo $form->field($model, 'jenis_tenaga_id') ?>

    <?php // echo $form->field($model, 'unit_kerja_id') ?>

    <?php // echo $form->field($model, 'jabatan_struktural_id') ?>

    <?php // echo $form->field($model, 'jabatan_fungsional_id') ?>

    <?php // echo $form->field($model, 'pangkat_golongan_id') ?>

    <?php // echo $form->field($model, 'is_active') ?>

    <?php // echo $form->field($model, 'grade') ?>

    <?php // echo $form->field($model, 'tunjangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
