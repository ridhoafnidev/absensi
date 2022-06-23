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

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
