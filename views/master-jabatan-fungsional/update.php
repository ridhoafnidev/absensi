<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */

$this->title = 'Update Master Jabatan Fungsional: ' . $model->id_jabatan_fungsional;
$this->params['breadcrumbs'][] = ['label' => 'Master Jabatan Fungsional', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jabatan_fungsional, 'url' => ['view', 'id' => $model->id_jabatan_fungsional]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jabatan-fungsional-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
