<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */

$this->title = 'Create Tb Master Jenis Tenaga';
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jenis Tenagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jenis-tenaga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
