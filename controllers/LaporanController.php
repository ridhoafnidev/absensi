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

            return $this->redirect(['laporan', 'awal' => $bulanAwal, 'akhir' => $bulanAkhir]);
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionLaporan() {
        $model = new TbAbsensi();

        $tgl_awal = Yii::$app->getRequest()->getQueryParam('awal');
        $tgl_akhir = Yii::$app->getRequest()->getQueryParam('akhir');

        $data = (new Query());
        $data->select(['tb_absensi.*', 'tb_master_status_absensi.status_absensi'])
        ->from('tb_absensi')
        ->leftJoin('tb_master_status_absensi', 'tb_master_status_absensi.id_status_absensi = tb_absensi.status_absensi_id')
        ->where('tb_absensi.date_absensi between "'.$tgl_awal.'" AND "'.$tgl_akhir.'" ');

        $command = $data->createCommand();
        $modelAbsensi = $command->queryAll();

        $mpdf = new Mpdf();
        $mpdf->SetTitle("Laporan");
        $mpdf->WriteHTML($this->renderPartial('laporan', [
            'model' => $model,
            'model_absensi' => $modelAbsensi,
        ]));
        $mpdf->Output('laporan.pdf', 'I');
        exit();
    }
}