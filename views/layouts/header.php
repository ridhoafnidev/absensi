<?php
 use yii\helpers\Html;
?>
<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <span class="m-r-sm text-muted welcome-message">Selamat datang...</span>
        </li>

        <li>
        <?= Html::a('<i class="fa fa-sign-out"></i>  Keluar',
           ['/site/logout'], ['data' => ['method' => 'post']]) //optional* -if you need to add style
        ?>
            
        </li>
    </ul>

</nav>