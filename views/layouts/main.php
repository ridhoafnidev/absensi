<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head()  ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div id="wrapper">

        <!-- navbar -->
        <?php include("navbar.php");  ?>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">

                <!-- header -->
                <?php include("header.php") ?>

            </div>
            <br>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2></h2>
                    <ol class="breadcrumb">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content">
                <div class="row">

                    <div class="col-lg-12">

                        <?= $content ?>
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php include("footer.php") ?>

        </div>
    </div>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>