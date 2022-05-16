<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pembayaran */
?>
<div class="pembayaran-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pembayaran',
            'id_ortu',
            'nominal',
            'bukti_pembayaran',
            'keterangan',
            'status',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
