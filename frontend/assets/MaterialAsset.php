<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MaterialAsset extends AssetBundle
{
    public $basePath = '@frontend';
    public $baseUrl = '@frontend';
    public $css = [
        //'css/site.css',
		'themes/material/css/font-awesome.min.css',
		'themes/material/css/slicknav.css',


    ];
    public $js = [
	    'themes/material/js/jquery.migrate.js',
		'themes/material/js/modernizrr.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
