<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=""/>
    <style>
        .column {
            float: left;
            width: 50%;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        * {
            font-family: Arial, serif;
        }

        .box-kop {
            margin-top: 2px;
            border: 1.5px solid #000000;
        }

        .box-kop-under {
            margin-top: 1px;
            border: 0.5px solid #000000;
        }

        .font-title {
            font-weight: bold;
            font-size:14px;
        }

        .font-subtitle {
            font-size: 12px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 0;
        }

        .font-date {
            font-size: 12px;
            text-align: center;
            margin-top: -2px;
        }

        .kop td {
            text-align: center;
        }

        .kop table {
            font-weight: bold;
            font-size: 11px;
            border: 0;
            margin-left: auto;
            margin-right: auto;
            color: #00B050;
        }

        .kop td, .kop th {
            padding-left: 20px;
        }

        .biodata {
            width: 100%;
        }
        .biodata td {
            font-size: 12px;
        }

        .content {
            padding: 10px;
        }
    </style>
</head>
<body>

<?php

$bulan_awal = Yii::$app->getRequest()->getQueryParam('awal');
$bulan_akhir = Yii::$app->getRequest()->getQueryParam('akhir');
$split_awal = explode('-', $bulan_awal);

$tahun = $split_awal[0];
$absensiSakit = array();

foreach ($model_absensi_year as $dataYear) {
    $date1 = $dataYear['tanggal_mulai'];
    $date2 = $dataYear['tanggal_selesai'];

    $dtDate1 = new DateTime($date1);
    $dtDate2 = new DateTime($date2);

    $diffDate = $dtDate1->diff($dtDate2)->format("%d");

    for ($i = 0; $i <= $diffDate; $i++ ) {
        $arraySakit['date_absensi'] = date('Y-m-d', strtotime($date1. ' + '.$i.' days'));

        array_push($absensiSakit, $arraySakit);
    }

}

function month_indo($month)
{
    $bulan = array(1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    return $bulan[(int)$month];
}

function tanggal_indo($tanggal_awal, $tanggal_akhir)
{
    $bulan = array (1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );

    $split_awal = explode('-', $tanggal_awal);
    $split_akhir = explode('-', $tanggal_akhir);
    if ((int)$split_awal[1] == (int)$split_akhir[1] ) {
        return $bulan[(int)$split_awal[1]];
    }else{
        return $bulan[(int)$split_awal[1]]. "-".$bulan[(int)$split_akhir[1]];
    }
}

?>

<table class="kop">
    <tr>
        <td rowspan="4">
            <img src="http://localhost/absensi/web/gambar/kop/depaglogo.png" width="70" height="80" alt="Logo Depag">
        </td>
        <td>
            <h1 class="font-title">KEMENTERIAN AGAMA REPUBLIK INDONESIA</h1>
        </td>
    </tr>
    <tr>
        <td>
            <h2 class="font-title">KANTOR KEMENTERIAN AGAMA KABUPATEN INDRAGIRI HULU</h2>
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-jl">JL. Lintas Timur - Pematang Reba</p>
        </td>
    </tr>
    <tr>
        <td>
            <p class="font-jl">Telepon (0769) 341576; Faksimili (0769) 341574</p>
        </td>
    </tr>
</table>

<div class="box-kop-under"></div>
<div class="box-kop"></div>

<h1 class="font-subtitle">REKAP ABSEN</h1>
<p class="font-date"><?= tanggal_indo($bulan_awal, $bulan_akhir) ?> <?= $split_awal[0] ?></p>

<table class="biodata">
    <tr>
        <td>Nama</td>
        <td colspan="5">: <?= $model_user['nama_lengkap'] ?></td>
        <td>Grade</td>
        <td>: <?= $model_user['grade'] ?></td>
    </tr>
    <tr>
        <td>NIP</td>
        <td colspan="5">: <?= $model_user['nip'] ?></td>
        <td>Tunjangan</td>
        <td>: <?php
            if ($model_user['pns_nonpns_id'] == "1") {
                    if(strlen($model_user['tunjangan']) > 0 )  {
                        echo "Rp. ".number_format($model_user['tunjangan']);
                    } else {
                        echo "Rp. ".number_format(0);
                    }
            }
            ?></td>
    </tr>
    <tr>
        <td>Pangkat Gol</td>
        <td colspan="5">: <?= $model_user['pangkat_golongan'] ?></td>
    </tr>
</table>

<table class="content" border="1" width="100%" style="margin-top: 10px;  border: 1px solid black; border-collapse: collapse; padding: 5px;">
    <tr>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Pulang</th>
        <th>Scan Masuk</th>
        <th>Scan Pulang</th>
        <th>Terlambat</th>
        <th>Plg. Cepat</th>
        <th>Pengecualian</th>
        <th>Jumlah Jam Kerja</th>
        <th>Lembur</th>
    </tr>
    <?php

    function getTunjangan($tunjangan, $totalPersenTerlambat)
    {
        return $tunjangan - ($tunjangan * $totalPersenTerlambat / 100);
    }

    function convertDay($day)
    {
        switch ($day) {
            case 'Sunday':
                $hari = 'Minggu';
                break;
            case 'Monday':
                $hari = 'Senin';
                break;
            case 'Tuesday':
                $hari = 'Selasa';
                break;
            case 'Wednesday':
                $hari = 'Rabu';
                break;
            case 'Thursday':
                $hari = 'Kamis';
                break;
            case 'Friday':
                $hari = 'Jumat';
                break;
            case 'Saturday':
                $hari = 'Sabtu';
                break;
            default:
                $hari = 'Tidak ada';
                break;
        }
        return $hari;
    }

    function getJamMasukByHari($day)
    {
        $dayJamKerja = \app\models\TbMasterJamKerja::find()
            ->where(['hari' => $day])
            ->one();

        $daySplite = explode('-', $dayJamKerja->jam);
        return $daySplite[0];
    }

    function getJamKeluarByHari($day)
    {
        $dayJamKerja = \app\models\TbMasterJamKerja::find()
            ->where(['hari' => $day])
            ->one();

        $daySplite = explode('-', $dayJamKerja->jam);
        return $daySplite[1];
    }

    $absensi =array();

    $index = 0;

    foreach ($model_absensi_all as $dataAll) {

        $cekSizeDate = \app\models\TbAbsensi::find()
            ->where(['date_absensi' => $dataAll['date_absensi']])
            ->count();

        $dataAbsensi = \app\models\TbAbsensi::find()
            ->where(['date_absensi' => $dataAll['date_absensi']])
            ->all();

        if ($cekSizeDate == 2) {

            $array['date_absensi'] = $dataAbsensi[0]['date_absensi'];
            $array['time_absensi_masuk'] = $dataAbsensi[0]['time_absensi'];
            $array['time_absensi_keluar'] = $dataAbsensi[1]['time_absensi'];

            $array['pengecualian'] = $dataAbsensi[0]['status_absensi_id'];
            $array['lembur'] = $dataAbsensi[0]['lembur'];
            $array['status_absensi_id'] = $dataAbsensi[0]['status_absensi_id'];

            array_push($absensi, $array);

        }
        else if ($cekSizeDate == 1){

            $date1 = $dataAll['tanggal_mulai'];
            $date2 = $dataAll['tanggal_selesai'];

            $dtDate1 = new DateTime($date1);
            $dtDate2 = new DateTime($date2);

            $diffDate = $dtDate1->diff($dtDate2)->format("%d");

            if ($dataAll['status_absensi_id'] == "5" OR $dataAll['status_absensi_id'] == "3") {

                for ($i = 0; $i <= $diffDate; $i++ ) {
                    $array['date_absensi'] = date('Y-m-d', strtotime($date1. ' + '.$i.' days'));
                    $array['time_absensi_masuk'] = "";
                    $array['time_absensi_keluar'] = "";

                    $array['pengecualian'] = $dataAll['status_absensi_id'];
                    $array['lembur'] = $dataAll['lembur'];
                    $array['status_absensi_id'] = $dataAll['status_absensi_id'];

                    array_push($absensi, $array);
                }

            }
            else {
                $array['date_absensi'] = $dataAbsensi[0]['date_absensi'];
                if ($dataAbsensi[0]['jenis_absensi'] == "masuk"){
                    $array['time_absensi_masuk'] = $dataAbsensi[0]['time_absensi'];
                    $array['time_absensi_keluar'] = "";
                }
                else {
                    $array['time_absensi_masuk'] = "";
                    $array['time_absensi_keluar'] = $dataAbsensi[0]['time_absensi'];
                }

                $array['pengecualian'] = $dataAbsensi[0]['status_absensi_id'];
                $array['lembur'] = $dataAbsensi[0]['lembur'];
                $array['status_absensi_id'] = $dataAbsensi[0]['status_absensi_id'];

                array_push($absensi, $array);
            }



        }

        $index++;
    }

    function getException($ex)
    {
        switch ($ex) {
            case '1':
                $pengecualian = "WFH";
                break;
            case '2':
                $pengecualian = "WFO";
                break;
            case '3':
                $pengecualian = "Sakit";
                break;
            case '4':
                $pengecualian = "Cuti";
                break;
            case '5':
                $pengecualian = "DL";
                break;
        }
        return $pengecualian;
    }

    function getDiffTime(DateTime $time1, DateTime $time2)
    {
        return $time1->diff($time2)->format('%H:%I');
    }

    $index = 0;
    $totalMinute = 0;
    $totalPersenTerlambat = 0;

    function getPercentageLate($lateTime)
    {
        $totalPersen = 0;
        $exTime = explode(':', $lateTime);
        $hour = $exTime[0] * 60;
        $minute = $exTime[1];
        $minutes = $hour + $minute;
        switch ($minutes) {
            case $minutes >= 0 && $minutes <= 30:
                $totalPersen += 0.5;
                break;
            case  $minutes >= 31 && $minutes <= 60:
                $totalPersen += 1;
                break;
            case  $minutes >= 61 && $minutes <= 90:
                $totalPersen += 1.5;
                break;
            case  $minutes >= 91:
                $totalPersen += 1.5;
                break;
        }
        return $totalPersen;
    }

    foreach ($absensiSakit as $key=>$value) {
        $dateSakit = strtotime($value['date_absensi']);
        $daySakit = convertDay(date('l', $dateSakit));
        if ($daySakit == "Sabtu"){
            unset($absensiSakit[$key]);
        }
        else if ($daySakit == "Minggu"){
            unset($absensiSakit[$key]);
        }
    }

    foreach ($absensi as $key=>$value) {
        $date = strtotime($value['date_absensi']);
        $day = convertDay(date('l', $date));
        if ($day == "Sabtu"){
            unset($absensi[$key]);
        }
        else if ($day == "Minggu"){
            unset($absensi[$key]);
        }
    }

    foreach ($absensi as $data):?>
        <tr>
            <td>
                <?php
                $date = strtotime($data['date_absensi']);
                echo convertDay(date('l', $date));
                ?>
            </td>
            <td><?= $data['date_absensi']; ?></td>
            <td><?= getJamMasukByHari(convertDay(date('l', $date))); ?></td>
            <td><?= getJamKeluarByHari(convertDay(date('l', $date))); ?></td>
            <td>
                <?php
                $timeAbsensiMasuk = $data['time_absensi_masuk'];
                switch ($data['status_absensi_id']) {
                    case "5":
                        $totalPersenTerlambat += 0;
                        break;
                    case "3":
                        $totalPersenTerlambat += 0;
                        break;
                    default:
                        if (empty($timeAbsensiMasuk)){
                            $totalPersenTerlambat += 1.5;
                        }
                }
                echo $timeAbsensiMasuk;
                ?>
            </td>
            <td><?php
                $timeAbsensiKeluar= $data['time_absensi_keluar'];
                switch ($data['status_absensi_id']) {
                    case "3":
                    case "5":
                        $totalPersenTerlambat += 0;
                        break;
                    default:
                        if (empty($timeAbsensiKeluar)){
                            $totalPersenTerlambat += 1.5;
                        }
                }
                echo $timeAbsensiKeluar;
                ?></td>
            <td>
                <?php

                $time1 = strtotime(getJamMasukByHari(convertDay(date('l', $date))));
                $time2 = strtotime($timeAbsensiMasuk);

                if ($time2 > $time1) {
                    $timeOffice1 = new DateTime(getJamMasukByHari(convertDay(date('l', $date))));
                    $timeMasuk2 = new DateTime($timeAbsensiMasuk);

                    $lateTime = getDiffTime($timeOffice1, $timeMasuk2);
                    if ($lateTime != "00:00") {
                        $totalPersenTerlambat += getPercentageLate($lateTime);
                        echo $lateTime;
                    } else {
                        "";
                    }
                }
                ?>
            </td>
            <td></td>
            <td style="text-align: center"><?= getException($data['pengecualian']) ?></td>
            <td>
                <?php
                $timeMasuk = new DateTime($data['time_absensi_masuk']);
                $timeKeluar = new DateTime($data['time_absensi_keluar']);
                $diffAllTime = getDiffTime($timeMasuk, $timeKeluar);
                if ($diffAllTime != "00:00") {
                    echo $diffAllTime;
                }
                else {
                    echo "";
                }
                ?>
            </td>
            <td>
                <?php
                if ($data['time_absensi_keluar'] != ""){
                    $jamKelKan = getJamKeluarByHari(convertDay(date('l', $date)));
                    $jamKel = $data['time_absensi_keluar'];
                    $timeJadwalKeluar = new DateTime($jamKelKan);
                    $timeKantorKeluar = new DateTime($jamKel);
                    if (strtotime($jamKel) > strtotime($jamKelKan)) {
                        echo getDiffTime($timeJadwalKeluar, $timeKantorKeluar);
                    }
                    else {
                        $totalPersenTerlambat += getPercentageLate(getDiffTime($timeJadwalKeluar, $timeKantorKeluar));
                    }
                }
                else {
                    echo "";
                }

                ?>
            </td>
        </tr>
        <?php $index++; endforeach; ?>

</table>

<div class="row">
    <div class="column">
        <table class="content" border="1" style="margin-top: 10px;  border: 1px solid black; border-collapse: collapse; padding: 5px;">
            <tr>
                <th>Hari Kerja <?= count($absensiSakit) ?></th>
                <th>Total Pemotongan(%)</th>
            </tr>
            <tr>
                <td style="text-align: center"><?= count($model_absensi_all) - count($model_absensi_dl)?></td>
                <td style="text-align: center"><?= $totalPersenTerlambat ?></td>
            </tr>
        </table>
    </div>
    <div class="column">
        <table class="content" border="1" style="margin-top: 10px; margin-left: 60px;  border: 1px solid black; border-collapse: collapse; padding: 5px;">
            <tr>
                <th><b>Tunjangan Kinerja</b></th>
            </tr>
            <tr>
                <td style="text-align: center"><?= "Rp. ".number_format(getTunjangan($model_user['tunjangan'], $totalPersenTerlambat)) ?></td>
            </tr>
        </table>
    </div>
</div>

<br>
<p style="margin-left:400px; font-size:12px;font-family:Arial, Times, serif;">
    Pekanbaru, <?= date("d") ?> <?= month_indo(date('m')) ?> <?= date("Y") ?>
</p>
<p style="margin-left:400px; font-size:12px;font-family:Arial, Times, serif;">
    Pelaksana Perhitungan Tunjangan Kinerja
</p>
<p style="margin-left:400px; margin-top:100px; font-size:12px;font-family:'Times New Roman', Times, serif;">
    HAFIZUDDIN, SE <br>
    NIP: ...
</p>

</body>
</html>
