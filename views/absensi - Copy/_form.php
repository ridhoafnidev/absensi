<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-absensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_absensi')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'time_absensi')->textInput(['type' => 'time']) ?>

     <!-- $form->field($model, 'status_absensi_id')->textInput() ?> -->

    <?php
    $status_absensi = \app\models\TbMasterStatusAbsensi::find()->all();

    $list = \yii\helpers\ArrayHelper::map($status_absensi, 'id_status_absensi','status_absensi');

    echo $form->field($model, 'status_absensi_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Status Absensi');
    ?>

    <?= $form->field($model, 'tanggal_mulai')->textInput(['type' => 'date']) ?>

    <?= $form->field($model, 'tanggal_selesai')->textInput(['type' => 'date']) ?>

     <!-- $form->field($model, 'dokumen_pendukung')->fileInput() ?> -->

    <?php

    $list_anak_ke = array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10');

    echo $form->field($model, 'anak_ke')->dropDownList(
            $list_anak_ke,
            ['prompt' => 'Pilih...']
    )->label('Anak ke-');

    $list_cuti = ['Cuti Tahunan' => 'Cuti Tahunan', 'Cuti Besar' => 'Cuti Besar'
    , 'Cuti Alasan Tidak Penting' => 'Cuti Alasan Penting', 'Cuti Bersalin' => 'Cuti Bersalin'];

    echo $form->field($model, 'jenis_cuti')->dropDownList(
            $list_cuti,
            ['prompt' => 'Pilih...']
    )->label('Jenis Cuti')
    ?>

    <?php

    $list_lembur = array('Tidak', 'Iya');

    echo $form->field($model, 'lembur')->dropDownList(
            $list_lembur,
            ['prompt' => 'Pilih...']
    )->label('Lembur')
    ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lng')->textInput() ?>

    <?= $form->field($model, 'alamat_absensi')->textarea(['rows' => 6]) ?>

     <!-- $form->field($model, 'created_at')->textInput() ?> -->

     <!-- $form->field($model, 'updated_at')->textInput() ?> -->

    <?php
    $user = \app\models\TbUser::find()->all();

    $list = \yii\helpers\ArrayHelper::map($user, 'id_user','username');

    echo $form->field($model, 'user_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Username');

    // $query = \app\models\TbUser::find()
    // ->select('tb_pegawai.nama_lengkap')  // make sure same column name not there in both table
    // ->leftJoin('tb_pegawai', 'tb_user.id_user = tb_pegawai.user_id')
    // ->where(['tb_pegawai.office_id' => $model->office_id])
    // ->asArray()
    // ->all();

    // echo $form->field($model, 'user_id')->dropDownList(
    //     $query,
    //     ['prompt' => 'Pilih...']
    // )->label('Username');
    ?>


    <!-- $form->field($model, 'user_id')->textInput() ?> -->

    <?= $form->field($model, 'jenis_absensi')->dropDownList([ 'masuk' => 'Masuk', 'keluar' => 'Keluar', ], ['prompt' => '']) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
