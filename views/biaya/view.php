<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Biaya */
?>
<div class="biaya-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_biaya',
            'npsn',
            'jenis_biaya',
            'jenis_penitipan',
            'rentang_umur',
            'total_biaya',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
