<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterStatusAbsensi */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Status Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-status-absensi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
