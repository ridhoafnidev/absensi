<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DetailKegiatan */
?>
<div class="detail-kegiatan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_detail_kegiatan',
            'id_kegiatan',
            'nama_kegiatan',
            'keterangan',
            'jam',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
