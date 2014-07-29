<?php

namespace guzuomuse\JqueryCustomContentScroller;
/* 
 * author:孤坐暮色
 * yii2 extension:yii2-jquery-custom-content-scroller based on "jquery custom content scroller"
 * 
*/
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
class JqueryCustomContentScroller extends \yii\base\Widget {
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */    
    public $options = [];
    /*
    @var array  options配置
     */
    public $pluginOptions=[];
    
        
    public function init(){
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }        
        echo Html::beginTag('div', $this->options) . "\n";
        NiceScrollAsset::register($this->view,  \yii\web\View::POS_READY);
        $this->registerJs();
    }
    
        
    public function run(){
        parent::run();
        echo Html::endTag('div') . "\n";
    }
    public function registerJs(){
        foreach ($this->pluginOptions as $k=>$v){
            $options.=$k.':'.  Json::encode($v).',';
//            $options.=$k.':'.  $v;
        }
        $js=<<<EOD

       $("#$this->id").mCustomScrollbar({{$options}});         
       
       
EOD;
        $this->view->registerJs($js);
    }
}

