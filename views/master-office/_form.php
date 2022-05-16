<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterOffice */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-office-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'office_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'office_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput() ?>

    <?= $form->field($model, 'lng')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
