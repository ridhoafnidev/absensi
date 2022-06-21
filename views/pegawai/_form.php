<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="tb-pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

<!--    < $form->field($model, 'user_id')->textInput() ?>-->

    <?= $form->field($model, 'nik')->textInput(['maxlength' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

<!--    < $form->field($model, 'username')->textInput(['maxlength' => true]) ?>-->

<!--    < $form->field($model, 'password')->textInput(['maxlength' => true]) ?>-->

<!--    < $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>-->

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?php
    $pns = \app\models\TbMasterPnsNonpns::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_pns_nonpns', 'pns_nonpns');

    echo $form->field($model, 'pns_nonpns_id')->dropDownList(
            $list,
            ['prompt' => 'Pilih...']
    )->label('Pns Non-pns')
    ?>

    <?php
    $pns = \app\models\TbMasterJenisTenaga::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_jenis_tenaga', 'jenis_tenaga');

    echo $form->field($model, 'jenis_tenaga_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jenis Tenaga');

    ?>

    <?php
    $pns = \app\models\TbMasterUnitKerja::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_unit_kerja', 'unit_kerja');

    echo $form->field($model, 'unit_kerja_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Unit Kerja');
    ?>

    <?php
    $pns = \app\models\TbMasterJabatanStruktural::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_master_jabatan_struktural', 'jabatan_struktural');

    echo $form->field($model, 'jabatan_struktural_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jabatan Struktural');

    ?>

    <?php
    $pns = \app\models\TbMasterJabatanFungsional::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_jabatan_fungsional', 'jabatan_fungsional');

    echo $form->field($model, 'jabatan_fungsional_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Jabatan Fungsional');
    ?>

    <?php
    $pns = \app\models\TbMasterPangkatGolongan::find()->all();

    $list = \yii\helpers\ArrayHelper::map($pns, 'id_pangkat_golongan', 'pangkat_golongan');

    echo $form->field($model, 'pangkat_golongan_id')->dropDownList(
        $list,
        ['prompt' => 'Pilih...']
    )->label('Pangkat Golongan');
    ?>

    <?php
        $gradeList = \app\models\TbTunjangan::find()->all();
        $listData = \yii\helpers\ArrayHelper::map($gradeList, 'id', 'grade');
        echo $form->field($model,'grade')->dropDownList(
            \yii\helpers\ArrayHelper::map(
                \app\models\TbTunjangan::find()->all(),
                'id','grade'
            ),
            [
                'prompt' => 'pilih.. ',
                'onchange'=>'
                $.get( "'.Yii::$app->urlManager->createUrl('pegawai/dropdown-grade?id=').'"+$(this).val(), function( data ) {
                $( "div#tunjangan" ).html( data );
                console.log(data);
                })
'
            ]
        );
        // echo $form->field($model, 'grade')->widget(Select2::classname(), [
        //             'data' => $listData,
        //             'language' => 'en',
        //             'options' => ['placeholder' => 'Pilih Grade' , 'id' => 'id_grade', 'onchange'=> '
        //             $.get( "'.Yii::$app->urlManager->createUrl('pegawai/dropdown-grade?id=').'"+$(this).val(), function( data ) {
        //             $( "input#tunjangan" ).html( data );
        //             })' ],
        //             'pluginOptions' => [
        //                 'allowClear' => true
        //             ],
        //         ])->label(false);

         ?>
                
    <div  id="tunjangan" ></div>
    <!-- < $form->field($model, 'tunjangan')->textInput(['maxlength' => true, 'type' => 'number', 'id'=>'tunjangan']) ?> -->
    <!-- < $form->field($model, 'tunjangan', ['inputOptions'=>['id'=>'tunjangan',]])->dropDownList([]); ?> -->
<!--    < $form->field($model, 'is_active')->textInput() ?>-->  
    <br>
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
<?php
    $render_tunjang = Url::to(['/absensi/pegawai/form-tunjangan']);
    $this->registerJs(<<<JS
        function tunjanganChange() {
        // var idGrade = document.getElementById("id_grade").value;
        // var link = "$render_tunjang"+"?id_grade="+id_grade;
        //         $('#tunjangan').load(link, function() {
        //             $('#tunjangan').hide();
        //             $('#tunjangan').show();
        //         });
        
        }
    JS);
?>
