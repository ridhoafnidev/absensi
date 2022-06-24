<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */

$this->title = 'Update Master Jam Kerja: ' . $model->id_jam_kerja;
$this->params['breadcrumbs'][] = ['label' => 'Master Jam Kerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jam_kerja, 'url' => ['view', 'id' => $model->id_jam_kerja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jam-kerja-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
