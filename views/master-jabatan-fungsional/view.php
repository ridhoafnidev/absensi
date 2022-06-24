<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterJabatanFungsional */

$this->title = $model->id_jabatan_fungsional;
$this->params['breadcrumbs'][] = ['label' => 'Master Jabatan Fungsional', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-jabatan-fungsional-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jabatan_fungsional], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jabatan_fungsional], [
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
            'id_jabatan_fungsional',
            'jabatan_fungsional',
        ],
    ]) ?>

</div>
