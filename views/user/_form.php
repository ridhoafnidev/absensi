<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'unique_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kloter')->textInput(['maxlength' => true, 'type'=>'number']) ?>

    <?= $form->field($model, 'priode')->textInput(['maxlength' => true, 'type'=>'number']) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_awal')->textInput(['maxlength' => true, 'type' => 'date']) ?>

    <?= $form->field($model, 'nama_akhir')->textInput(['maxlength' => true, 'type' => 'date']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'type' => 'password']) ?>

    <?php // $form->field($model, 'salt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_hp')->textInput() ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'restore_id')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
