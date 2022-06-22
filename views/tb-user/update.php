<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = 'Pengguna: ' . $model->tbPegawais->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_user, 'url' => ['view', 'id' => $model->id_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-user-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
