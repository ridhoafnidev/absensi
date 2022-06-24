<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJamKerja */

$this->title = $model->id_jam_kerja;
$this->params['breadcrumbs'][] = ['label' => 'Master Jam Kerja', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-jam-kerja-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jam_kerja], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jam_kerja], [
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
            'id_jam_kerja',
            'hari',
            'jam',
        ],
    ]) ?>

</div>
