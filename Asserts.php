<?php

namespace stivehu\persisthide;

use Yii;
use yii\web\AssetBundle;

/**
 * Description of Assets
 *
 * @author stive
 */
class Asserts extends AssetBundle
{

    public $sourcePath = '@persisthide/assets';
    public $js = [
        'persisthide.js'
    ];
    public $depends = [
        'stivehu\enhancedcookie\Asserts'
    ];

    public function init()
    {
        Yii::setAlias('@persisthide', __DIR__);
        return parent::init();
    }

}
