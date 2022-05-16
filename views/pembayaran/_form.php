<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

$url = Yii::$app->urlManagerFrontEnd->baseUrl;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ortu')->textInput() ?>

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>

    <?php if (!$model->isNewRecord): ?>
            <?php
            $img = [];
            $json = [];
            if (!empty($model->bukti_pembayaran)){
                
                    $img[] = Html::img($url.'/web/gambar/pembayaran/'.$model->bukti_pembayaran, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                    $json[] = [
                        'caption'=>$model->bukti_pembayaran, Url::to(['/file/delete-upload']),
                        'key' => 'bukti_pembayaran '.  $model->id_pembayaran, 
                    ];
                }
            ?>

        <?= $form->field($model, 'bukti_pembayaran')->widget(FileInput::className(),[
            'options' => ['accept' => ''],
            'pluginOptions' => [
                'showRemove'=> false,
                'showUpload' => false,
                'showCancel' => false,
                'overwriteInitial' => false,
                'initialPreviewConfig' => $json,
                'previewFileType' => 'image',
                'initialPreview' => $img,
                'uploadAsync'=> true,
                'maxFileSize' => 3*1024*1024,
                'deleteUrl' => Url::to(['/file/delete-upload']),
                'allowedExtensions' => ['jpg','png','jpeg'],
            ]
        ])?>
        <?php else : ?>
            <?= $form->field($model, 'bukti_pembayaran')->widget(FileInput::classname(), [
            'options' => ['accept' => ''],
            'pluginOptions' => [
                'showUpload' => false,
            ]
        ]); ?>
        <?php endif; ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Belum Dibayar' => 'Belum Dibayar', 'Sudah Dibayar' => 'Sudah Dibayar', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'createdAt')->textInput() ?>

    <?= $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
