<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanStruktural */

$this->title = 'Update Tb Master Jabatan Struktural: ' . $model->id_master_jabatan_struktural;
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jabatan Strukturals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_jabatan_struktural, 'url' => ['view', 'id' => $model->id_master_jabatan_struktural]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jabatan-struktural-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
