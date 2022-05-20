<?php

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbAsset */
/* @var $form yii\widgets\ActiveForm */
?>

    <!-- /.row -->
<?php

$this->title = 'Laporan';
$this->params['breadcrumbs'][] = $this->title;

$form = ActiveForm::begin(['options' => ['action' => ['/tb-asset/hasil-laporan'], 'target' => '_blank']]);

$pegawai = \app\models\TbPegawai::find()->all();
$listData = ArrayHelper::map($pegawai, 'user_id', 'nama_lengkap');

?>


    <h1 class="lead" style='font-family:"Lucida Console", Monaco, monospace; font-size:200%'>
        <center>Cari Laporan Absensi</center>
    </h1>


    <div class="row">


        <div class="col-xs-3">

            <div class="form-group">
                <label>Pegawai</label>

                <?= $form->field($model, 'user')->widget(Select2::classname(), [
                    'data' => $listData,
                    'language' => 'en',
                    'options' => ['placeholder' => 'Pilih Pegawai'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])->label(false);

                ?>
            </div>
        </div>

        <div class="col-xs-3">
            <div class="form-group">
                <label>Bulan awal</label>
                <?= $form->field($model, 'bulan_awal')->textInput(['maxlength' => true, 'type' => 'date'])->label(false) ?>
            </div>
        </div>

        <div class="col-xs-3">
            <div class="form-group">
                <label>Bulan akhir</label>
                <?= $form->field($model, 'bulan_akhir')->textInput(['maxlength' => true, 'type' => 'date'])->label(false) ?>
            </div>
        </div>
        <div class="col-xs-3" style="margin-top: 24px;">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Cari' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <!-- </form> -->

<?php ActiveForm::end(); ?>