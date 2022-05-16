<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetailKegiatan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-kegiatan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kegiatan')->textInput() ?>

    <?= $form->field($model, 'nama_kegiatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
