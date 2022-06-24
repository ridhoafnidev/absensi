<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */

$this->title = 'Update Absensi: ' . $model->id_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_absensi, 'url' => ['view', 'id' => $model->id_absensi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-absensi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
