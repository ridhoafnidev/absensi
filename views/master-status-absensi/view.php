<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterStatusAbsensi */

$this->title = $model->id_status_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Master Status Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-status-absensi-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_status_absensi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_status_absensi], [
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
            'id_status_absensi',
            'status_absensi',
        ],
    ]) ?>

</div>
