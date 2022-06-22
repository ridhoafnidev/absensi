<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterOffice */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-office-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
