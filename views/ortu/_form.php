<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ortu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ortu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->FileInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'createdAt')->textInput() ?>

    <?php // $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
