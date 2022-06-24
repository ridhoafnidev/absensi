<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanStruktural */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Jabatan Struktural', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jabatan-struktural-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
