<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPangkatGolongan */

$this->title = 'Update Master Pangkat Golongan: ' . $model->id_pangkat_golongan;
$this->params['breadcrumbs'][] = ['label' => 'Master Pangkat Golongan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pangkat_golongan, 'url' => ['view', 'id' => $model->id_pangkat_golongan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-pangkat-golongan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
