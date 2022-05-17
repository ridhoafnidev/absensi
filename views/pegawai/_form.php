<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    < $form->field($model, 'user_id')->textInput() ?>-->

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

<!--    < $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?php
    $pns = \app\models\TbMasterPnsNonpns::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_pns_nonpns', 'pns_nonpns');

    echo $form->field($model, 'pns_nonpns_id')->dropDownList(
            $list,
            ['prompt' => 'Pilih...']
    )->label('Pns Non-pns')
    ?>

    <?php
    $pns = \app\models\TbMasterJenisTenaga::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_jenis_tenaga', 'jenis_tenaga');

    echo $form->field($model, 'jenis_tenaga_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jenis Tenaga');

    ?>

    <?php
    $pns = \app\models\TbMasterUnitKerja::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_unit_kerja', 'unit_kerja');

    echo $form->field($model, 'unit_kerja_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Unit Kerja');
    ?>

    <?php
    $pns = \app\models\TbMasterJabatanStruktural::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_jabatan_struktural', 'jabatan_struktural');

    echo $form->field($model, 'jabatan_struktural_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jabatan Struktural');

    ?>

    <?php
    $pns = \app\models\TbMasterJabatanFungsional::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_jabatan_fungsional', 'jabatan_fungsional');

    echo $form->field($model, 'jabatan_fungsional_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jabatan Fungsional');
    ?>

    <?php
    $pns = \app\models\TbMasterPangkatGolongan::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_pangkat_golongan', 'pangkat_golongan');

    echo $form->field($model, 'pangkat_golongan_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Pangkat Golongan');
    ?>

<!--    < $form->field($model, 'is_active')->textInput() ?>-->

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
