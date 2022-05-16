<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPnsNonpns */
?>
<div class="tb-master-pns-nonpns-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_pns_nonpns',
            'pns_nonpns',
        ],
    ]) ?>

</div>
