<?php

namespace orioledev\ckeditor4;

use yii\web\AssetBundle;

/**
 * Class EditorAsset
 * @package orioledev\ckeditor4
 */
class EditorAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@orioledev/ckeditor4/editor';
    /**
     * @var array
     */
    public $js = [
        'ckeditor.js',
        'js.js',
    ];
    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}