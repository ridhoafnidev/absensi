<?php
use yii\helpers\Html;
?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="logo-element">
                        +
                    </div>
                </li>
                <li class="<?php echo (
                        Yii::$app->controller->route == 'master-jabatan-fungsional/index' ||
                        Yii::$app->controller->route == 'master-jabatan-struktural/index' ||
                        Yii::$app->controller->route == 'master-jam-kerja/index' ||
                        Yii::$app->controller->route == 'master-jenis-tenaga/index' ||
                        Yii::$app->controller->route == 'master-level/index' ||
                        Yii::$app->controller->route == 'master-office/index' ||
                        Yii::$app->controller->route == 'master-pangkat-golongan/index' ||
                        Yii::$app->controller->route == 'master-pns-nonpns/index' ||
                        Yii::$app->controller->route == 'master-status-absensi/index'

                ) ? 'active' : ''?>">
                    <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Data Master</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="<?php echo (Yii::$app->controller->route == 'master-jabatan-fungsional/index') ? 'active' : ''?>"><?= Html::a('Jabatan Fungsional', ['/master-jabatan-fungsional/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-jabatan-struktural/index') ? 'active' : ''?>"><?= Html::a('Jabatan Struktural', ['/master-jabatan-struktural/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-jam-kerja/index') ? 'active' : ''?>"><?= Html::a('Jam Kerja', ['/master-jam-kerja/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-jenis-tenaga/index') ? 'active' : ''?>"><?= Html::a('Jenis Tenaga', ['/master-jenis-tenaga/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-level/index') ? 'active' : ''?>"><?= Html::a('Level', ['/master-level/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-office/index') ? 'active' : ''?>"><?= Html::a('Kantor', ['/master-office/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-pangkat-golongan/index') ? 'active' : ''?>"><?= Html::a('Pangkat Golongan', ['/master-pangkat-golongan/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-pns-nonpns/index') ? 'active' : ''?>"><?= Html::a('Pns Non-pns', ['/master-pns-nonpns/index']) ?></li>
                        <li class="<?php echo (Yii::$app->controller->route == 'master-status-absensi/index') ? 'active' : ''?>"><?= Html::a('Status Absensi', ['/master-status-absensi/index']) ?></li>
                    </ul>
                </li>

            <li class="<?php echo (Yii::$app->controller->route == 'pegawai/index') ? 'active' : ''?>">
                <?= Html::a('<i class="fa fa-users"></i></span> <span class="nav-label"> Pegawai', ['/pegawai/index']) ?>
            </li>

            <li class="<?php echo (Yii::$app->controller->route == 'tb-user/index') ? 'active' : ''?>">
                <?= Html::a('<i class="fa fa-user"></i></span> <span class="nav-label"> Pengguna', ['/tb-user/index']) ?>
            </li>

            <li class="<?php echo (Yii::$app->controller->route == 'absensi/index') ? 'active' : ''?>">
                <?= Html::a('<i class="fa fa-list"></i></span> <span class="nav-label"> Absensi', ['/absensi/index']) ?>
            </li>

            <li class="<?php echo (Yii::$app->controller->route == 'laporan/index') ? 'active' : ''?>">
                <?= Html::a('<i class="fa fa-book"></i></span> <span class="nav-label"> Laporan', ['/laporan/index']) ?>
            </li>
        </ul>
    </div>
</nav>