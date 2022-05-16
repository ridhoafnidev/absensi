<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengelola */
?>
<div class="pengelola-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_pengelola',
            'nama_lengkap',
            'email:email',
            'password',
            'alamat',
            'nomor_handphone',
            'pekerjaan',
            'usia',
            'agama',
            'foto',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
