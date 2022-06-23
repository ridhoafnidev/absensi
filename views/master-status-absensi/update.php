<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterStatusAbsensi */

$this->title = 'Update Master Status Absensi: ' . $model->id_status_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Master Status Absensi
', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_status_absensi, 'url' => ['view', 'id' => $model->id_status_absensi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-status-absensi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
