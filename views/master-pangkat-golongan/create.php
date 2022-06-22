<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPangkatGolongan */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Pangkat Golongan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-pangkat-golongan-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
