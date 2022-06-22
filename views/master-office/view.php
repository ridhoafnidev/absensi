<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterOffice */

$this->title = $model->id_master_office;
$this->params['breadcrumbs'][] = ['label' => 'Master Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-office-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_master_office], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_master_office], [
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
            'id_master_office',
            'office_name',
            'office_address',
            'lat',
            'lng',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
