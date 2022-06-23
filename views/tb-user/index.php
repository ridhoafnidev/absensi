<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TbUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengguna';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-user-index">

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'password',
            'username',
            [
              'attribute' => "level_id",
              'label' => "Level",
              'value' => function($model) {
                    return $model->level->level;
              }
            ],
            [
              'attribute' => "office_id",
              'label' => "Satker",
              'value' => function($model) {
                 return $model->satker->office_name;
              }
            ],
            [
              'attribute' => "is_active",
              'label' => "Status Akun",
              'value' => function($model) {
                if ($model->is_active == 1) {
                    return "Aktif";
                }
                else {
                    return "Tidak aktif";
                }
              }
            ],
            //'is_active',
            //'created_at',
            //'updated_at',
            //'authkey',
            //'accesToken',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
