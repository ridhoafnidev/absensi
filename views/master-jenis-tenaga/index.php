<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMasterJenisTenagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Jenis Tenagas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jenis-tenaga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Master Jenis Tenaga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_master_jenis_tenaga',
            'jenis_tenaga',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
