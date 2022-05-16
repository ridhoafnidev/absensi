<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPangkatGolongan */
?>
<div class="tb-master-pangkat-golongan-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pangkat_golongan',
            'pangkat_golongan',
        ],
    ]) ?>

</div>
