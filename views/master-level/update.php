<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterLevel */

$this->title = 'Update Master Level: ' . $model->id_level;
$this->params['breadcrumbs'][] = ['label' => 'Master Level', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_level, 'url' => ['view', 'id' => $model->id_level]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-master-level-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
