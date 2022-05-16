<?php

use yii\widgets\DetailView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tpa */
?>
<div class="tpa-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tpa',
            'npsn',
            'nama_lokasi',
            'alamat',
            [
                'attribute' => 'foto_1',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/tpa/'. $data['foto_1'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            [
                'attribute' => 'foto_2',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/tpa/'. $data['foto_2'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            [
                'attribute' => 'foto_3',
                'format' => 'html',    
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/gambar/tpa/'. $data['foto_3'],
                        ['width' => '100px', 'height' => '100%']);
                },
            ],
            'latitude',
            'longitude',
            'status',
            'id_pengelola',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
