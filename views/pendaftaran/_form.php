<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendaftaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tpa_id')->textInput() ?>

    <?= $form->field($model, 'nama_tpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput() ?>

    <?= $form->field($model, 'ortu_id')->textInput() ?>

    <?= $form->field($model, 'nama_ortu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia_ortu')->textInput() ?>

    <?= $form->field($model, 'pekerjaan_ortu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_ortu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_anak')->textInput() ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput() ?>

    <?= $form->field($model, 'nomor_akta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan_masuk_tpa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanggal_pendaftaran')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
