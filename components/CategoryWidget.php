<?php

namespace app\components;

use yii\base\Widget;

use app\models\Category;

class CategoryWidget extends Widget{
    //init
    //run
    public function run()
    {
        $categoryList = Category::find()->asArray()->all();
        return $this->render('category', compact('categoryList'));
    }
}