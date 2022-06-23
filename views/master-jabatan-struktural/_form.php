<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanStruktural */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-jabatan-struktural-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jabatan_struktural')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
