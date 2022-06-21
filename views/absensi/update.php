<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */

$this->title = 'Update Tb Absensi: ' . $model->id_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Tb Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_absensi, 'url' => ['view', 'id' => $model->id_absensi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-absensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
