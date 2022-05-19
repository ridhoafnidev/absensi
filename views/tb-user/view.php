<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */
?>
<div class="tb-user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_user',
            'username',
            //'password',
            [
                'attribute' => 'level_id',
                'label' => 'Level',
                'value' =>  $model->level->level
            ],
            [
                 'attribute' => 'is_active',
                 'label' => 'Status',
                 'value' => function($data) {
                    if ($data->is_active == 1) {
                        return "Aktif";
                    }else {

                        return "Tidak Aktif";
                    }
                 }
            ],
//            'created_at',
//            'updated_at',
        ],
    ]) ?>

</div>
