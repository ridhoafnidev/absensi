<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FasilitasTpa */
?>
<div class="fasilitas-tpa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_fasilitas_tpa',
            'npsn',
            'id_fasilitas',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
