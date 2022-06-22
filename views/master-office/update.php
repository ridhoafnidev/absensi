<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterOffice */

$this->title = 'Update Master Satker: ' . $model->id_master_office;
$this->params['breadcrumbs'][] = ['label' => 'Master Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_office, 'url' => ['view', 'id' => $model->id_master_office]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-office-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
