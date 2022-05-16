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
                        <li><?= Html::a('Jabatan Fungsional', ['/jabatan-fungsional/index']) ?></li>
                        <li><?= Html::a('Jabatan Struktural', ['/jabatan-struktural/index']) ?></li>
                        <li><?= Html::a('Jam Kerja', ['/jam-kerja/index']) ?></li>
                        <li><?= Html::a('Jenis Tenaga', ['/jenis-tenaga/index']) ?></li>
                        <li><?= Html::a('Level', ['/level/index']) ?></li>
                        <li><?= Html::a('Jam Kantor', ['/jam-kantor/index']) ?></li>
                        <li><?= Html::a('Pangkat Golongan', ['/pangkat-golongan/index']) ?></li>
                        <li><?= Html::a('Pns Non-pns', ['//index']) ?></li>
                        <li><?= Html::a('Status Absensi', ['/jam-kantor/index']) ?></li>
                    </ul>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-diamond"></i></span> <span class="nav-label"> Kegiatan', ['/kegiatan/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-list"></i></span> <span class="nav-label"> Pendaftaran', ['/pendaftaran/index']) ?>
                </li>

                <li>
                    <?= Html::a('<i class="fa fa-money"></i></span> <span class="nav-label"> Pembayaran', ['/pembayaran/index']) ?>
                </li>
            </ul>
        </div>
    </nav>