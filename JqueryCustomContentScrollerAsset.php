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
		"js/jquery.JqueryCustomContentScroller.min.js"
	];

	public $css = [
		"css/test.css",
	];

//	public $publishOptions = [
//		'forceCopy' => true
//	];

	public $depends = [
		'yii\web\YiiAsset',
                'yii\bootstrap\BootstrapAsset',
	];    
}
