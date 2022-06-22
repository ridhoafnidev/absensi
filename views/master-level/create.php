<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterLevel */

$this->title = 'Tambah';
$this->params['breadcrumbs'][] = ['label' => 'Master Level', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-level-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
