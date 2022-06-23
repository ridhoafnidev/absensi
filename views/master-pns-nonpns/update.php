<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPnsNonpns */

$this->title = 'Update Master Pns Nonpns: ' . $model->id_master_pns_nonpns;
$this->params['breadcrumbs'][] = ['label' => 'Master Pns Nonpns', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_pns_nonpns, 'url' => ['view', 'id' => $model->id_master_pns_nonpns]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-pns-nonpns-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
