<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterUnitKerja */
?>
<div class="tb-master-unit-kerja-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_unit_kerja',
            'unit_kerja',
        ],
    ]) ?>

</div>
