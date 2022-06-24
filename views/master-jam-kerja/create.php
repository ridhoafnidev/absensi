<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Jam Kerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jam-kerja-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
