<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
?>
<div class="admin-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_admin',
            'username',
            'password',
            'authkey',
            'accesToken',
            'createdAt',
            'updatedAt',
        ],
    ]) ?>

</div>
