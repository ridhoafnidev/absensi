<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPnsNonpns */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-master-pns-nonpns-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pns_nonpns')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
