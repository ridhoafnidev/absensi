<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\file\FileInput;
use yii\helpers\Url;
use app\models\Pengelola;

$url = Yii::$app->urlManagerFrontEnd->baseUrl;

/* @var $this yii\web\View */
/* @var $model app\models\Tpa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tpa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'npsn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

   
    <?php if (!$model->isNewRecord): ?>
            <?php
            $img = [];
            $json = [];
            if (!empty($model->foto_1)){
                
                    $img[] = Html::img($url.'/web/gambar/tpa/'.$model->foto_1, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                    $json[] = [
                        'caption'=>$model->foto_1, Url::to(['/file/delete-upload']),
                        'key' => 'foto_1 '.  $model->id_tpa, 
                    ];
                }
            ?>

        <?= $form->field($model, 'foto_1')->widget(FileInput::className(),[
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
            <?= $form->field($model, 'foto_1')->widget(FileInput::classname(), [
            'options' => ['accept' => ''],
            'pluginOptions' => [
                'showUpload' => false,
            ]
        ]); ?>
        <?php endif; ?>

        <?php if (!$model->isNewRecord): ?>
            <?php
            $img = [];
            $json = [];
            if (!empty($model->foto_2)){
                
                    $img[] = Html::img($url.'/web/gambar/tpa/'.$model->foto_2, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                    $json[] = [
                        'caption'=>$model->foto_2, Url::to(['/file/delete-upload']),
                        'key' => 'foto_2 '.  $model->id_tpa, 
                    ];
                }
            ?>

        <?= $form->field($model, 'foto_2')->widget(FileInput::className(),[
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
            <?= $form->field($model, 'foto_2')->widget(FileInput::classname(), [
            'options' => ['accept' => ''],
            'pluginOptions' => [
                'showUpload' => false,
            ]
        ]); ?>
        <?php endif; ?>

        <?php if (!$model->isNewRecord): ?>
            <?php
            $img = [];
            $json = [];
            if (!empty($model->foto_3)){
                
                    $img[] = Html::img($url.'/web/gambar/tpa/'.$model->foto_3, ['style' => 'width:auto; height:auto; max-width:100%; max-height:100%']);

                    $json[] = [
                        'caption'=>$model->foto_3, Url::to(['/file/delete-upload']),
                        'key' => 'foto_3'.  $model->id_tpa, 
                    ];
                }
            ?>

        <?= $form->field($model, 'foto_3')->widget(FileInput::className(),[
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
            <?= $form->field($model, 'foto_3')->widget(FileInput::classname(), [
            'options' => ['accept' => ''],
            'pluginOptions' => [
                'showUpload' => false,
            ]
        ]); ?>
        <?php endif; ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Swasta' => 'Swasta', 'Negeri' => 'Negeri', ], ['prompt' => '']) ?>

    <?php 
        //use app\models\Country;
        $peng = Pengelola::find()->all();

        //use yii\helpers\ArrayHelper;
        $listData=ArrayHelper::map($peng,'id_pengelola','nama_lengkap');

        echo $form->field($model, 'id_pengelola')->dropDownList(
                $listData,
                ['prompt'=>'Pilih...']
                )->label("Pengelola");
    ?>

    <?php // $form->field($model, 'createdAt')->textInput() ?>

    <?php // $form->field($model, 'updatedAt')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
