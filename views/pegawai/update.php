<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbPegawai */

$this->title = 'Update Pegawai: ' . $model->id_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pegawai, 'url' => ['view', 'id' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-pegawai-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
