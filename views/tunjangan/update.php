<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbTunjangan */

$this->title = 'Update Tunjangan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tunjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-tunjangan-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
