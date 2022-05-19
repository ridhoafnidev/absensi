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

        .font-title {
            font-weight: bold;
            font-size:14px;
            font-family: Arial;
        }
        .font-jl{
            font-size: 14px;
            font-weight: normal;
            font-family: Arial;
        } font-family: Arial;

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
        <img src="http://localhost/absensi/web/gambar/kop/riau.png" width="60" height="80" style="margin-left: 7%">
        <font class="font-title">KEMENTERIAN AGAMA REPUBLIK INDONESIA</font><br>
        <font class="font-title">KANTOR KEMENTERIAN AGAMA KABUPATEN INDRAGIRI HULU</font><br>
        <font class="font-jl">JL. Lintas Timur - Pematang Reba</font><br>
        <font class="font-jl">Telepon (0769) 341576; Faksimili (0769) 341574 </font><br>
    </div>
</div>

<div class="box-kop-under"/>
<div class="box-kop"/>

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
    foreach ($model_absensi_masuk as $dataMasuk) {
        foreach ($model_absensi_keluar as $dataKeluar) {
            if ($dataMasuk['date_absensi'] == $dataKeluar['date_absensi']){
                $array['date_absensi'] = $dataMasuk['date_absensi'];
                $array['time_absensi_masuk'] = $dataMasuk['time_absensi'];
                $array['time_absensi_keluar'] = $dataKeluar['time_absensi'];

                $array['terlambat'] = $dataMasuk['terlambat'];
                $array['plg_cepat'] = $dataMasuk['plg_cepat'];
                $array['pengecualian'] = $dataMasuk['status_absensi'];
                $array['lembur'] = $dataMasuk['lembur'];

            }
            else {
                $array['date_absensi'] = $dataMasuk['date_absensi'];
                $array['time_absensi_masuk'] = $dataMasuk['time_absensi'];
                $array['time_absensi_keluar'] = "";

                $array['terlambat'] = $dataMasuk['terlambat'];
                $array['plg_cepat'] = $dataMasuk['plg_cepat'];
                $array['pengecualian'] = $dataMasuk['status_absensi'];
                $array['lembur'] = $dataMasuk['lembur'];
            }
            array_push($absensi, $array);
        }
    }

    foreach ($absensi as $data):?>
        <tr>
            <td><?php
                $date = strtotime($data['date_absensi']);
                echo convertDay(date('l', $date));
                ?>
            </td>
            <td><?= $data['date_absensi'] ?></td>
            <td>
                <?php
                echo  getJamMasukByHari(convertDay(date('l', $date)));
                ?>
            </td>
            <td>
                <?php
                echo  getJamKeluarByHari(convertDay(date('l', $date)));
                ?>
            </td>
            <td><?= $data['time_absensi_masuk'] ?></td>
            <td><?= $data['time_absensi_keluar'] ?></td>
            <td>
                <?php

                    $time1 = strtotime(getJamMasukByHari(convertDay(date('l', $date))));
                    $time2 = strtotime($data['time_absensi_masuk']);

                    if ($time2 > $time1) {
                        $timeOffice1 = new DateTime(getJamMasukByHari(convertDay(date('l', $date))));
                        $timeMasuk2 = new DateTime($data['time_absensi_masuk']);

                         $lateTime = $timeOffice1->diff($timeMasuk2)->format('%H:%S');
                         if ($lateTime != "00:00") {
                             echo $lateTime;
                         } else {
                             "";
                         }
                    }
                ?>
            </td>
            <td><?= $data['plg_cepat'] ?></td>
            <td><?php
                if ($data['pengecualian'] == "Dinas Luar") {
                    echo "OL";
                }
                else {
                    echo $data['pengecualian'] ;
                }
                ?>
            </td>
            <td>
                <?php
                $timeMasuk = new DateTime($data['time_absensi_masuk']);
                $timeKeluar = new DateTime($data['time_absensi_keluar']);
                echo $timeMasuk->diff($timeKeluar)->format('%H:%S');
                ?>
            </td>
            <td>
                <?php
                    if ($data['time_absensi_keluar'] != ""){
                        $timeJadwalKeluar = new DateTime(getJamKeluarByHari(convertDay(date('l', $date))));
                        $timeKantorKeluar = new DateTime($data['time_absensi_keluar']);
                        echo $timeJadwalKeluar->diff($timeKantorKeluar)->format('%H:%S');
                    }
                    else {
                        echo "";
                    }

                ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
