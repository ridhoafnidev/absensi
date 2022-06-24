<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMasterJamKerjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Jam Kerja';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jam-kerja-index">

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hari',
            'jam',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
