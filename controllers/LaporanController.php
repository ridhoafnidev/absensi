<?php
namespace app\controllers;
use app\models\TbAbsensi;
use Mpdf\Mpdf;
use Yii;
use yii\db\Query;
use yii\web\Controller;

class LaporanController extends Controller
{
    public function actionIndex() {
        $model = new \app\models\TbAbsensi();
        $post = Yii::$app->request->post();

        if ($model->load($post)) {
            $bulanAwal = $post['TbAbsensi']['bulan_awal'];
            $bulanAkhir = $post['TbAbsensi']['bulan_akhir'];
            $user = $post['TbAbsensi']['user'];

            return $this->redirect(['laporan', 'awal' => $bulanAwal, 'akhir' => $bulanAkhir, 'user' => $user]);
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionLaporan() {
        $model = new TbAbsensi();

        $tgl_awal = Yii::$app->getRequest()->getQueryParam('awal');
        $tgl_akhir = Yii::$app->getRequest()->getQueryParam('akhir');
        $idUser = Yii::$app->getRequest()->getQueryParam('user');

        $dataUser = (new Query());
        $dataUser->select(['tb_pegawai.*', 'tb_master_pangkat_golongan.pangkat_golongan'])
        ->from('tb_pegawai')
        ->leftJoin('tb_master_pangkat_golongan', 'tb_master_pangkat_golongan.id_pangkat_golongan = tb_pegawai.pangkat_golongan_id')
        ->where(' tb_pegawai.user_id="'.$idUser.'" ');

        $commandUser = $dataUser->createCommand();
        $modelUser = $commandUser->queryOne();

        $dataAbsensiAll = (new Query());
        $dataAbsensiAll->select(['tb_absensi.*', 'tb_master_status_absensi.status_absensi'])
        ->from('tb_absensi')
        ->leftJoin('tb_master_status_absensi', 'tb_master_status_absensi.id_status_absensi = tb_absensi.status_absensi_id')
        ->where('tb_absensi.user_id="'.$idUser.'" AND tb_absensi.date_absensi between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ')
        ->groupBy('tb_absensi.date_absensi');

        $commandAbsensiAll = $dataAbsensiAll->createCommand();
        $modelAbsensiAll = $commandAbsensiAll->queryAll();

        $dataAbsensiDl = (new Query());
        $dataAbsensiDl->select(['tb_absensi.*', 'tb_master_status_absensi.status_absensi'])
        ->from('tb_absensi')
        ->leftJoin('tb_master_status_absensi', 'tb_master_status_absensi.id_status_absensi = tb_absensi.status_absensi_id')
        ->where('tb_absensi.user_id="'.$idUser.'" AND tb_absensi.status_absensi_id="5" AND tb_absensi.date_absensi between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ')
        ->groupBy('tb_absensi.date_absensi');

        $commandAbsensiDl = $dataAbsensiDl->createCommand();
        $modelAbsensiDl = $commandAbsensiDl->queryAll();

        $mpdf = new Mpdf();
        $mpdf->SetTitle("Laporan");
        $stylesheet = file_get_contents('http://localhost/absensi/web/css/reportstyles.css');
        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($this->renderPartial('laporan', [
            'model' => $model,
            'model_absensi_all' => $modelAbsensiAll,
            'model_absensi_dl' => $modelAbsensiDl,
            'model_user' => $modelUser,
        ]));
        $mpdf->Output('laporan.pdf', 'I');
        exit();
    }
}