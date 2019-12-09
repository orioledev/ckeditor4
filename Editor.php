<?php

namespace orioledev\ckeditor4;

use mihaildev\ckeditor\Assets;
use mihaildev\ckeditor\CKEditor;
use Yii;

/**
 * Class Editor
 * @package orioledev\ckeditor4
 */
class Editor extends CKEditor
{
    /**
     *
     */
    public function run()
    {
        EditorAsset::register($this->getView());

        Yii::$app->getAssetManager()->bundles[Assets::class] = false;

        parent::run();
    }
}
