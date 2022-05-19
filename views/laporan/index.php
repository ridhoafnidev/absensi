<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbAsset */
/* @var $form yii\widgets\ActiveForm */
?>

    <!-- /.row -->
<?php $form = ActiveForm::begin(['options'=>['action'=>['/tb-asset/hasil-laporan'],'target'=>'_blank']]); ?>

    <!-- <form action="/hms/accommodations" method="GET">  -->

    <h1 class="lead" style='font-family:"Lucida Console", Monaco, monospace; font-size:200%'><center>PT. KUNANGO JANTAN CABANG PEKANBARU</center></h1>


    <div class="row">

        <div class="col-xs-4">
            <div class="form-group">
                <label>Bulan awal</label>
                <?= $form->field($model, 'bulan_awal')->textInput(['maxlength' => true, 'type'=>'date'])->label(false) ?>
            </div>
        </div>

        <div class="col-xs-4">
            <div class="form-group">
                <label>Bulan akhir</label>
                <?= $form->field($model, 'bulan_akhir')->textInput(['maxlength' => true, 'type'=>'date'])->label(false) ?>
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