<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ortu;

/* @var $this yii\web\View */
/* @var $model app\models\Anak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tmp_lahir')->textInput(['maxlength' => true])->label("Tempat Lahir") ?>

    <?= $form->field($model, 'tgl_lahir')->textInput(['maxlength' => true, 'type' => 'date'])->label("Tanggal Lahir") ?>

    <?= $form->field($model, 'jenis_kelamin')->dropDownList([ 'Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'no_akta_kelahiran')->textInput(['maxlength' => true]) ?>

    <?php 
        //use app\models\Country;
        $ortu = Ortu::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($ortu,'id_ortu','nama_lengkap');

        echo $form->field($model, 'id_ortu')->dropDownList(
                $listData,
                ['prompt'=>'Pilih...']
                )->label("Orang tua");
    ?>

    <?php // $form->field($model, 'createdAt')->textInput() ?>

    <?php // $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
