yii2-jquery-custom-content-scroller
===================================
yii2 extension:yii2-jquery-custom-content-scroller based on "jquery custom content scroller"

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist "guzuomuse/yii2-jquery-custom-content-scroller": "dev-master"
```

or add

```
"guzuomuse/yii2-jquery-custom-content-scroller": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
                        <?php
        JqueryCustomContentScroller::begin([
            'options'=>[

            ],
            'pluginOptions'=>[
                'setWidth'=>'100%',
                'axis'=>'x',
                'scrollButtons'=>new JsExpression('{enable:true}'),
                'theme'=>'rounded-dark',
//                'scrollInertia'=>3000,
                'scrollbarPosition'=>'outside',
                'autoHideScrollbar'=>true,
//                'autoExpandScrollbar'=>true,
            ],
        ]);
        ?> 
 ```