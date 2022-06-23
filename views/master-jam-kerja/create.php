<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */

$this->title = 'Tambah Master Jam Kerja';
$this->params['breadcrumbs'][] = ['label' => 'Master Jam Kerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jam-kerja-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
