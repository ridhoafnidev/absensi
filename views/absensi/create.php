<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbAbsensi */

$this->title = 'Create Tb Absensi';
$this->params['breadcrumbs'][] = ['label' => 'Tb Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-absensi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
