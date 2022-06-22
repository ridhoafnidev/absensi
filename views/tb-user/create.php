<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-user-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
