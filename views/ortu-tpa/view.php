<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OrtuTpa */
?>
<div class="ortu-tpa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ortu_tpa',
            'id_ortu',
            'npsn',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
