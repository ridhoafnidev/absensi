<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbMasterJabatanStrukturalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Master Jabatan Struktural';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-master-jabatan-struktural-index">

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            /*'id_master_jabatan_struktural',*/
            'jabatan_struktural',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
