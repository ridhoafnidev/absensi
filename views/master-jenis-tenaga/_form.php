<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-jenis-tenaga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_tenaga')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
