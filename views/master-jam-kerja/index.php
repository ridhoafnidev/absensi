<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMasterJamKerjaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Jam Kerjas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jam-kerja-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Master Jam Kerja', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_jam_kerja',
            'hari',
            'jam',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
