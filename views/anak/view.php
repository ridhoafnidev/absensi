<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anak */
?>
<div class="anak-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_anak',
            'nama_lengkap',
            'ttl',
            'jenis_kelamin',
            'no_akta_kelahiran',
            'ortu.nama_lengkap',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
