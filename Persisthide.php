<?php

namespace stivehu\persisthide;

/**
 * This is just an example.
 */
class Persisthide extends \yii\base\Widget
{
    public function init()
    {
        Asserts::register($this->getView());
        return parent::init();
    }

    public function run()
    {
        return "Hello!";
    }

}
