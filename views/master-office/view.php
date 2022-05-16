<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterOffice */
?>
<div class="tb-master-office-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_office',
            'office_name',
            'office_address',
            'lat',
            'lng',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
