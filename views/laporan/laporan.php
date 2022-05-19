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
        . table {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        .tr, td {
            padding-left: 10px;
        }

        . font {
            color: #00B050;
        }

        .box-kop {
            margin-top: 2px;
            border: 1.5px solid #000000;
        }

        .box-kop-under {
            margin-top: 1px;
            border: 0.5px solid #000000;
        }

        .font-yayasan {
            font-weight: bold;
            font-size:20.5px;
            font-family: "Modern No. 20";
        }
        .font-pendidikan{
            font-size: 14px;
            font-weight: bold;
            font-family: "Modern No. 20";
        }
        .font-alfurqon{
            font-size: 14px;
            font-weight: bold;
            font-family: "Modern No. 20";
        }
        .font-jl{
            font-size: 11px;
            font-weight: bold;
            font-family: Arial;
        }
        .font-tel{
            font-size: 11px;
            font-weight: bold;
            font-family: Arial;
        }
        .font-pos{
            margin-left: 20%;
            font-size: 11px;
            font-weight: bold;
            font-family: Arial;
        }

        .kop table {
            font-weight: bold;
            font-size: 11px;
            border: 0;
            margin-left: auto;
            margin-right: auto;
            font-family: Arial;
            color: #00B050;
        }

        .kop td, kop th {
            padding-left: 20px;
        }

    </style>
</head>
<body>

<div style="text-align: center;">
    <div class="kop">
        <font class="font-yayasan">KEMENTERIAN AGAMA REPUBLIK INDONESIA</font><br>
        <font class="font-pendidikan">KANTOR WILAYAH KEMENTERIAN AGAMA</font><br>
        <font class="font-alfurqon">PROVINSI RIAU</font><br>
        <font class="font-jl">JL. KULIM BERINGIN INDAH KECAMATAN MARPOYAN DAMAI</font><br>
        <table><tr><td>TELEPON : 0761 – 7637045</td><td>KODE POS : 28294</td></tr></table>
    </div>
</div>

<div class="box-kop"/>
<div class="box-kop-under"/>

<table border="1" width="100%" style="margin-top: 50px;  border: 1px solid black; border-collapse: collapse; padding: 5px;">
    <tr>
        <th>Hari</th>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Pulang</th>
        <th>Scan Masuk</th>
        <th>Scan Pulang</th>
        <th>Terlambar</th>
        <th>Plg. Cepat</th>
        <th>Pengecualian</th>
        <th>Jumlah Jam Kerja</th>
        <th>Lembur</th>
    </tr>
    <?php

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
                $hari = 'Jum\'at';
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

        $daySplite = split('-', $dayJamKerja);
        return $daySplite[0];
    }

    function getJamKeluarByHari($day)
    {
        $dayJamKerja = \app\models\TbMasterJamKerja::find()
            ->where(['hari' => $day])
            ->one();

        $daySplite = split('-', $dayJamKerja);
        return $daySplite[1];
    }

//    print_r($model_absensi);
//    foreach ($model_absensi as $data) {
//        if ($data['date_absensi'] )
//    }
//    exit();

//    foreach ($model_absensi as $data) {
//        if ()


    ?>



</body>
</html>
