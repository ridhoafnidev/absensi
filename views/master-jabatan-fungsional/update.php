<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */

$this->title = 'Update Tb Master Jabatan Fungsional: ' . $model->id_jabatan_fungsional;
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jabatan Fungsionals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jabatan_fungsional, 'url' => ['view', 'id' => $model->id_jabatan_fungsional]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-jabatan-fungsional-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
