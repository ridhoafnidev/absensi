<?php

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Widget for display list of links to related models
 */
class KegiatanList extends Widget
{
    /**
     * @var \yii\db\ActiveRecord[] Related models
     */
    public $models = [];

    /**
     * @var string Base to build text content of the link.
     * You should specify attribute name. In case of dynamic generation ('getFullName()') you should specify just 'fullName'.
     */
    public $linkContentBase = 'jam';
    public $linkContentBase2 = 'nama_kegiatan';

    /**
     * @var string Route to build url to related model
     */
    public $viewRoute;

    /**
     * @inheritdoc
     */
    public function run()
    {
        if (!$this->models) {
            return null;
        }

        $items = [];
        foreach ($this->models as $model) {
            $items[] = Html::a("- ".$model->{$this->linkContentBase}, [$this->viewRoute, 'id' => $model->id_detail_kegiatan]);
            $items[] = Html::a("&nbsp;&nbsp;&nbsp;".$model->{$this->linkContentBase2}, [$this->viewRoute, 'id' => $model->id_detail_kegiatan]);
        }

        return Html::ul($items, [
            'class' => 'list-unstyled',
            'encode' => false,
        ]);
    }
}