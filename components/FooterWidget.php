<?php

namespace app\components;

use yii\base\Widget;

class FooterWidget extends Widget{
    //init
    //run
    public function run()
    {
        return $this->render('Footer');
    }
}