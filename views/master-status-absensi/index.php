<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMasterStatusAbsensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Status Absensi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-status-absensi-index">

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'status_absensi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
