<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterStatusAbsensi */
?>
<div class="tb-master-status-absensi-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_status_absensi',
            'status_absensi',
        ],
    ]) ?>

</div>
