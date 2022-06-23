<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */
?>
<div class="tb-master-jabatan-fungsional-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jabatan_fungsional',
            'jabatan_fungsional',
        ],
    ]) ?>

</div>
