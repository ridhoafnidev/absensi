<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */

$this->title = 'Update Tb Master Jenis Tenaga: ' . $model->id_master_jenis_tenaga;
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jenis Tenagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_jenis_tenaga, 'url' => ['view', 'id' => $model->id_master_jenis_tenaga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jenis-tenaga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
