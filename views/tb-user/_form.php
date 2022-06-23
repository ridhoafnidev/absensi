<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?php
    $level = \app\models\TbMasterLevel::find()->all();
    $list = \yii\helpers\ArrayHelper::map($level, 'id_level', 'level');

    echo $form->field($model, 'level_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Level') ?>

    <?= $form->field($model, 'is_active')->dropDownList([
        '1' => "Aktif", '0' => 'Tidak Aktif'
    ])->label("Status") ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
