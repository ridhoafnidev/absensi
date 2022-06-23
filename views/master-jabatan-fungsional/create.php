<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */

$this->title = 'Tambah Master Jabatan Fungsional';
$this->params['breadcrumbs'][] = ['label' => 'Master Jabatan Fungsionals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jabatan-fungsional-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
