<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */

$this->title = 'Update Master Jenis Tenaga: ' . $model->id_master_jenis_tenaga;
$this->params['breadcrumbs'][] = ['label' => 'Master Jenis Tenaga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_jenis_tenaga, 'url' => ['view', 'id' => $model->id_master_jenis_tenaga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jenis-tenaga-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
