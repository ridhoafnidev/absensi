<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterStatusAbsensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-status-absensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_absensi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
