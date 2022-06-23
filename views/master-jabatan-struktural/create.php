<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanStruktural */

$this->title = 'Create Tb Master Jabatan Struktural';
$this->params['breadcrumbs'][] = ['label' => 'Tb Master Jabatan Strukturals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jabatan-struktural-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
