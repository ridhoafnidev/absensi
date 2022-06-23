<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPangkatGolongan */

$this->title = $model->id_pangkat_golongan;
$this->params['breadcrumbs'][] = ['label' => 'Master Pangkat Golongan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-pangkat-golongan-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pangkat_golongan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pangkat_golongan], [
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
            'id_pangkat_golongan',
            'pangkat_golongan',
        ],
    ]) ?>

</div>
