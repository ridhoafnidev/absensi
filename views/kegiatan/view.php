<?php

use yii\widgets\DetailView;
use app\widgets\KegiatanList;

/* @var $this yii\web\View */
/* @var $model app\models\Kegiatan */
?>
<div class="kegiatan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_kegiatan',
            'npsn',
            'tanggal_kegiatan',
            [
                'label' => 'Kegiatan',
                'format' => 'raw',
                'value' => KegiatanList::widget([
                    'models' => $model->detailKegiatans,
                    'viewRoute' => '#',
                ]),        
            ],
            //'createdAt',
            //'updatedAt',
        ],
    ]) ?>

</div>
