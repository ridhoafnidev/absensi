<?php
namespace app\controllers;
use app\models\TbAbsensi;
use app\models\TbUser;
use Mpdf\Mpdf;
use Yii;
use yii\db\Query;
use yii\web\Controller;

class LaporanController extends Controller
{
    public function actionIndex() {
        $model = new \app\models\TbAbsensi();
        $post = Yii::$app->request->post();
        $user = TbUser::find()->where(['id_user' => Yii::$app->getUser()->id])->one();

        if ($model->load($post)) {
            $bulanAwal = $post['TbAbsensi']['bulan_awal'];
            $bulanAkhir = $post['TbAbsensi']['bulan_akhir'];
            $user = $post['TbAbsensi']['user'];

            return $this->redirect(['laporan', 'awal' => $bulanAwal, 'akhir' => $bulanAkhir, 'user' => $user]);
        }

        return $this->render('index', [
            'model' => $model,
            'user' => $user
        ]);
    }

    public function actionLaporan() {
        $model = new TbAbsensi();

        $user = TbUser::find()->where(['id_user' => Yii::$app->getUser()->id])->one();
        $office_id = $user->office_id;

        $tgl_awal = Yii::$app->getRequest()->getQueryParam('awal');
        $tgl_akhir = Yii::$app->getRequest()->getQueryParam('akhir');
        $idUser = Yii::$app->getRequest()->getQueryParam('user');

        //region Query count sick at year

        $dataAllAbsensiYear = (new Query());
        $dataAllAbsensiYear->select(['tb_absensi.*', 'YEAR(date_absensi)'])
            ->from('tb_absensi')
            ->where('YEAR(date_absensi)=YEAR("'.$tgl_akhir.'") AND status_absensi_id="3" AND office_id="'.$office_id.'"')
            ->groupBy('date_absensi');

        $commandAllAbsensiYear = $dataAllAbsensiYear->createCommand();
        $modelAllAbsensiYear = $commandAllAbsensiYear->queryAll();

        //endregion
        //region get selected user

        $dataUser = (new Query());
        $dataUser->select(['tb_pegawai.*', 'tb_master_pangkat_golongan.pangkat_golongan'])
            ->from('tb_pegawai')
            ->leftJoin('tb_master_pangkat_golongan', 'tb_master_pangkat_golongan.id_pangkat_golongan = tb_pegawai.pangkat_golongan_id')
            ->where('tb_pegawai.user_id="'.$idUser.'" ')
            ->where('tb_pegawai.office_id="'.$office_id.'"');

        $commandUser = $dataUser->createCommand();
        $modelUser = $commandUser->queryOne();

        //endregion
        //region get all absent in selected date range

        $dataAbsensiAll = (new Query());
        $dataAbsensiAll->select(['tb_absensi.*', 'tb_master_status_absensi.status_absensi'])
            ->from('tb_absensi')
            ->leftJoin('tb_master_status_absensi', 'tb_master_status_absensi.id_status_absensi = tb_absensi.status_absensi_id')
            ->where('tb_absensi.user_id="'.$idUser.'" AND tb_absensi.office_id="'.$office_id.'" AND tb_absensi.office_id="'.$office_id.'" AND tb_absensi.date_absensi between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ')
            ->groupBy('tb_absensi.date_absensi');

        $commandAbsensiAll = $dataAbsensiAll->createCommand();
        $modelAbsensiAll = $commandAbsensiAll->queryAll();

        //endregion
        //region get absent with Dinas Luar(DL)

        $dataAbsensiDl = (new Query());
        $dataAbsensiDl->select(['tb_absensi.*', 'tb_master_status_absensi.status_absensi'])
            ->from('tb_absensi')
            ->leftJoin('tb_master_status_absensi', 'tb_master_status_absensi.id_status_absensi = tb_absensi.status_absensi_id')
            ->where('tb_absensi.user_id="'.$idUser.'" AND tb_absensi.office_id="'.$office_id.'" AND tb_absensi.status_absensi_id="5" AND tb_absensi.date_absensi between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ')
            ->groupBy('tb_absensi.date_absensi');

        $commandAbsensiDl = $dataAbsensiDl->createCommand();
        $modelAbsensiDl = $commandAbsensiDl->queryAll();

        //endregion
        //region get all absent sick by current year

        $dataAbsensiYear = (new Query());
        $dataAbsensiYear->select(['tb_absensi.*'])
            ->from('tb_absensi')
            ->where('YEAR(date_absensi)=YEAR("'.$tgl_awal.'") AND status_absensi_id="3" AND office_id="'.$office_id.'" AND MONTH(date_absensi) between "01" AND MONTH("'.$tgl_awal.'")');

        $commandAbsensiYear = $dataAbsensiYear->createCommand();
        $modelAbsensiYear = $commandAbsensiYear->queryAll();

        //endregion
        //region Cuti Alasan Penting

        $dataCutiAlasanPenting = (new Query());
        $dataCutiAlasanPenting->select(['tb_absensi.*'])
            ->from('tb_absensi')
            ->where('YEAR(date_absensi)=YEAR("'.$tgl_awal.'") AND status_absensi_id="4" AND office_id="'.$office_id.'" AND MONTH(date_absensi) between "01" AND MONTH("'.$tgl_awal.'")');

        $commandCutiAlasanPenting = $dataCutiAlasanPenting->createCommand();
        $modelAllCutiAlasanPenting = $commandCutiAlasanPenting->queryAll();

        //endregion
        //region big leave



        //endregion
        //region maternity leave

        $dataMaternityLeave = (new Query());
        $dataMaternityLeave->select(['tb_absensi'])
            ->from('tb_absensi')
            ->where('YEAR(date_absensi)=YEAR("'.$tgl_awal.'") AND status_absensi_id="4" AND office_id="'.$office_id.'" AND MONTH(date_absensi) between "01" AND MONTH("'.$tgl_awal.'")');


        //endregion

        $mpdf = new Mpdf();
        $mpdf->SetTitle("Laporan");
        $stylesheet = file_get_contents('http://localhost/absensi/web/css/reportstyles.css');
        $mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($this->renderPartial('laporan', [
            'model' => $model,
            'model_absensi_all' => $modelAbsensiAll,
            'model_absensi_dl' => $modelAbsensiDl,
            'model_absensi_year' => $modelAbsensiYear,
            'model_user' => $modelUser,
            'model_all_absensi_year' => $modelAllAbsensiYear,
            'model_all_cuti_alasan_penting_year' => $modelAllCutiAlasanPenting,
        ]));
        $mpdf->Output('laporan.pdf', 'I');
        exit();
    }
}