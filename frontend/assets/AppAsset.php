<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
   public $css = [
		'css/flat-theme.css',
	];

	public $js = [
		'js/flat-theme.js'
	];

	public $depends = [
	    'yii\bootstrap\BootstrapAsset',
		'p2m\assets\P2CoreAsset',
		'p2m\assets\PrettyPhotoAsset',
		'p2m\assets\AnimateAsset',
	];
 
}
