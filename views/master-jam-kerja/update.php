<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */

$this->title = 'Update Tb Master Jam Kerja: ' . $model->id_jam_kerja;
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jam Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jam_kerja, 'url' => ['view', 'id' => $model->id_jam_kerja]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jam-kerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
