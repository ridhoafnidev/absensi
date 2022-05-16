<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Fasilitas */
?>
<div class="fasilitas-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_fasilitas',
            'nama_fasilitas',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
