<?php

namespace app\components;

use yii\base\Widget;

class NavbarWidget extends Widget{
    //init
    //run
    public function run(){
        return $this->render('Navbar');
    }
}