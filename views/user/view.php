<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */
?>
<div class="user-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_user',
            //'unique_id',
            'kloter',
            'priode',
            'username',
            'nama_awal',
            'nama_akhir',
            'email:email',
            //'password',
            //'salt',
            'nomor_hp',
            'alamat',
            //'restore_id',
        ],
    ]) ?>

</div>
