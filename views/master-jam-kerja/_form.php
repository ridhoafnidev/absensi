<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-jam-kerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hari')->dropDownList([ 'Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu', 'Minggu' => 'Minggu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jam')->textInput(['type' => 'date']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
