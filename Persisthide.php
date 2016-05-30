<?php

namespace stivehu\persisthide;

/**
 * This is just an example.
 */
class Persisthide extends \yii\base\Widget
{

    public $id = 'hiddendiv';
    private $_tag;

    public function init($tag = 'div')
    {
        Asserts::register($this->getView());
        $this->_tag = $tag;
        \Yii::$app->view->registerJs('var persisthide = "' . $this->id . '"', \yii\web\View::POS_HEAD);
        parent::init();
    }

    public function showButton($content, $options = null)
    {
        $options['id'] = isset($options['id']) ? $options['id'] : $this->id . "button";
        $options['onclick'] = 'setVisible();';
        return \yii\bootstrap\Html::button($content, $options);
    }

    public function beginTag($options = [])
    {
        $options['id'] = isset($options['id']) ? $options['id'] : $this->id;
        $persisthide = \stivehu\enhancedcookie\EnhancedCookie::getBigCookie($this->id);
        $options['style'] = ($persisthide === '1') ? '' : 'display:none';

        return \yii\helpers\Html::beginTag($this->_tag, $options);
    }

    public function endTag()
    {
        return \yii\helpers\Html::endTag($this->_tag);
    }

    public function run()
    {
        return;
    }

}
