<?php
use yii\helpers\Html;
?>
<nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="active">
                    <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Data Master</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><?= Html::a('Jabatan Fungsional', ['/master-jabatan-fungsional/index']) ?></li>
                        <li><?= Html::a('Jabatan Struktural', ['/master-jabatan-struktural/index']) ?></li>
                        <li><?= Html::a('Jam Kerja', ['/master-jam-kerja/index']) ?></li>
                        <li><?= Html::a('Jenis Tenaga', ['/master-jenis-tenaga/index']) ?></li>
                        <li><?= Html::a('Level', ['/master-level/index']) ?></li>
                        <li><?= Html::a('Jam Kantor', ['/master-office/index']) ?></li>
                        <li><?= Html::a('Pangkat Golongan', ['/master-pangkat-golongan/index']) ?></li>
                        <li><?= Html::a('Pns Non-pns', ['/master-pns-nonpns/index']) ?></li>
                        <li><?= Html::a('Status Absensi', ['/master-status-absensi/index']) ?></li>
                    </ul>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-users"></i></span> <span class="nav-label"> Pegawai', ['/pegawai/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-list"></i></span> <span class="nav-label"> Absensi', ['/absensi/index']) ?>
                </li>
            </ul>
        </div>
    </nav>