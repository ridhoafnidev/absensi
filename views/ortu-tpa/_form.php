<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrtuTpa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ortu-tpa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ortu')->textInput() ?>

    <?= $form->field($model, 'npsn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
