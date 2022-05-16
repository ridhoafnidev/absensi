<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pns_nonpns_id')->textInput() ?>

    <?= $form->field($model, 'jenis_tenaga_id')->textInput() ?>

    <?= $form->field($model, 'unit_kerja_id')->textInput() ?>

    <?= $form->field($model, 'jabatan_struktural_id')->textInput() ?>

    <?= $form->field($model, 'jabatan_fungsional_id')->textInput() ?>

    <?= $form->field($model, 'pangkat_golongan_id')->textInput() ?>

    <?= $form->field($model, 'is_active')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
