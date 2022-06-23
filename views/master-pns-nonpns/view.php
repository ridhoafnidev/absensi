<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbMasterPnsNonpns */

$this->title = $model->id_master_pns_nonpns;
$this->params['breadcrumbs'][] = ['label' => 'Master Pns Nonpns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tb-master-pns-nonpns-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_master_pns_nonpns], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_master_pns_nonpns], [
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
            'id_master_pns_nonpns',
            'pns_nonpns',
        ],
    ]) ?>

</div>
