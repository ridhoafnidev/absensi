<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */
?>
<div class="tb-master-jam-kerja-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jam_kerja',
            'hari',
            'jam',
        ],
    ]) ?>

</div>
