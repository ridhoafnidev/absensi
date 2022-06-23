<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbUser */

$this->title = $model->tbPegawais->nama_lengkap;
$this->params['breadcrumbs'][] = ['label' => 'Pengguna', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-user-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_user], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_user], [
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
            'id_user',
            'username',
            //'password',
            [
                'label' => 'Nama',
                'value' => $model->tbPegawais->nama_lengkap
            ],
            [
                'attribute' => 'level_id',
                'value' => $model->level->level
            ],
            [
                'attribute' => 'office_id',
                'value' => $model->satker->office_name
            ],
            [
              'attribute' => 'is_active',
              'value' => function($data) {
                  if ($data->is_active == 1) {
                      return "Aktif";
                  }
                  else {
                      return "Tidak aktif";
                  }
              }
            ],
            'created_at',
            //'updated_at',
            //'authkey',
            //'accesToken',
        ],
    ]) ?>

</div>
