<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPnsNonpns */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Pns Nonpns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-pns-nonpns-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
