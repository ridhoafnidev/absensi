<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanStruktural */
?>
<div class="tb-master-jabatan-struktural-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_jabatan_struktural',
            'jabatan_struktural',
        ],
    ]) ?>

</div>
