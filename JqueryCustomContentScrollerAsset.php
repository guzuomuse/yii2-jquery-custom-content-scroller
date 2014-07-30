<?php
/* 
 */
namespace guzuomuse\JqueryCustomContentScroller;
use yii\web\AssetBundle;
//设置别名,setAlias
\Yii::setAlias('@JqueryCustomContentScroller', dirname(__FILE__));
class JqueryCustomContentScrollerAsset extends AssetBundle{
	public $sourcePath = '@JqueryCustomContentScroller/assets/';

	public $js = [
		"jquery.mCustomScrollbar.min.js",
                'jquery.mousewheel.min.js',
	];

	public $css = [
		"jquery.mCustomScrollbar.css",
                
	];

//	public $publishOptions = [
//		'forceCopy' => true
//	];

	public $depends = [
		'yii\web\YiiAsset',
                'yii\bootstrap\BootstrapAsset',
	];    
}
