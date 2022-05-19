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
    </style>
</head>
<body>

<table class="kop">
    <tr>
        <td rowspan="4">
            <img src="http://localhost/absensi/web/gambar/kop/riau.png" width="60" height="80" alt="Logo Depag">
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
<p class="font-date">Maret 2020</p>

<table class="biodata">
    <tr>
        <td>Nama</td>
        <td colspan="5">Abdul Hafiz Ramadan</td>
        <td>Grade</td>
        <td>11</td>
    </tr>
    <tr>
        <td>NIP</td>
        <td colspan="5">123456789</td>
        <td>Tunjangan</td>
        <td>Rp. 10000000000</td>
    </tr>
    <tr>
        <td>Pangkat Gol</td>
        <td colspan="5">Owner</td>
    </tr>
</table>

<table border="1" width="100%" style="margin-top: 10px;  border: 1px solid black; border-collapse: collapse; padding: 5px;">
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
