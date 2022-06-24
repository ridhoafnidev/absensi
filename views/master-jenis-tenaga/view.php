<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJenisTenaga */

$this->title = $model->id_master_jenis_tenaga;
$this->params['breadcrumbs'][] = ['label' => 'Master Jenis Tenaga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-jenis-tenaga-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_master_jenis_tenaga], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_master_jenis_tenaga], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Yakin ingin menghapus data ini..?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_master_jenis_tenaga',
            'jenis_tenaga',
        ],
    ]) ?>

</div>
