<?php
namespace bulldozer\noty;

use yii\web\AssetBundle;

class NotyAsset extends AssetBundle
{
    public $sourcePath = '@bower/noty/lib';

    public $js = [
        'noty.js',
    ];

    public $css = [
        'noty.css',
    ];
}
