<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<!--Custom styles-->
<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
    ],
]); ?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
]); ?>

<form class="m-t" >

    <div class="form-group">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control', 'placeholder' => 'Username'])->label(false) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'password')->passwordInput(['autofocus' => true, 'class' => 'form-control', 'placeholder' => 'Password'])->label(false) ?>
    </div>

    <?= Html::submitButton('Login', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>

<!--    <a href="#"><small>Forgot password?</small></a>-->
<!--    <p class="text-muted text-center"><small>Do not have an account?</small></p>-->
<!--    <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
</form>

<?php ActiveForm::end(); ?>

