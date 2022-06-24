<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Jabatan Fungsional', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jabatan-fungsional-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
