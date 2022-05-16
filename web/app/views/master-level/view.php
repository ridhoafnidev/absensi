<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterLevel */
?>
<div class="tb-master-level-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_level',
            'level',
            'is_active',
        ],
    ]) ?>

</div>
