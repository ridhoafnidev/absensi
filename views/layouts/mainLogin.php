<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use app\assets\LoginAppAsset;
use yii\helpers\Html;

LoginAppAsset::register($this);

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()  ?>
</head>

<body class="gray-bg">
<?php $this->beginBody() ?>
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <?php $url = Yii::getAlias("@web").'/gambar/kop/' ?>
            <img class="logo-name" src="<?= $url ?>depaglogo.png" style="width: 180px; height: 180px;">

        </div>
        <h3 style="margin-top: 50px;">Selamat Datang</h3>
        <p>Silahkan login menggunakan Username dan Password.
        </p>

        <?= $content ?>

        <p class="m-t"> <small>Sistem administrator absensi Kemenag Inhu &copy; <?= date("Y") ?></small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

