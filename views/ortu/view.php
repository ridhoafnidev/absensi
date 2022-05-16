<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ortu */
?>
<div class="ortu-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_ortu',
            'nama_lengkap',
            'email:email',
            //'password',
            'alamat',
            'nomor_handphone',
            'pekerjaan',
            'usia',
            'agama',
            [
                'attribute' => 'foto',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/ortu/'. $data['foto'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            //'token',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
