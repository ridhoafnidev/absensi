<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

$url = Yii::$app->urlManagerFrontEnd->baseUrl;

/* @var $this yii\web\View */
/* @var $model app\models\Pengelola */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengelola-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomor_handphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

    <?php if (!$model->isNewRecord): ?>
        <?php
        $img = [];
        $json = [];
        if (!empty($model->photo)){
            
                $img[] = Html::img($url.'/web/gambar/pengelola/'.$model->photo, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                $json[] = [
                    'caption'=>$model->photo, Url::to(['/file/delete-upload']),
                      'key' => 'foto'.  $model->id_tpa, 
                ];
            }
        ?>

     <?= $form->field($model, 'foto')->widget(FileInput::className(),[
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
         <?= $form->field($model, 'foto')->widget(FileInput::classname(), [
        'options' => ['accept' => ''],
        'pluginOptions' => [
            'showUpload' => false,
        ]
    ]); ?>
    <?php endif; ?>

    <?php // $form->field($model, 'createdAt')->textInput() ?>

    <?php // $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
