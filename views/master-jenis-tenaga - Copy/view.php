<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */
?>
<div class="tb-master-jenis-tenaga-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_jenis_tenaga',
            'jenis_tenaga',
        ],
    ]) ?>

</div>
