<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Biaya */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biaya-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'npsn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_biaya')->dropDownList([ 'Per Hari' => 'Per Hari', 'Per Minggu' => 'Per Minggu', 'Per Bulan' => 'Per Bulan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_penitipan')->dropDownList([ 'Full Day' => 'Full Day', 'Half Day' => 'Half Day', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'rentang_umur')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_biaya')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'createdAt')->textInput() ?>

    <?php // $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
