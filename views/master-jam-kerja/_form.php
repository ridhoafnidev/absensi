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

    <?php
        if ($model->jam != "") :
            echo $form->field($model, 'jam_awal')->textInput(['type' => 'time', 'value' => explode(' - ', $model->jam)[0]]);
            echo $form->field($model, 'jam_akhir')->textInput(['type' => 'time', 'value' => explode(' - ', $model->jam)[1]]);
        else:
            echo $form->field($model, 'jam_awal')->textInput(['type' => 'time']);
            echo $form->field($model, 'jam_akhir')->textInput(['type' => 'time']);
        endif;
    ?>


    <div class="form-group">
        <?= Html::submitButton('Simpang', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
