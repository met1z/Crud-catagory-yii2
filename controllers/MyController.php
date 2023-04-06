<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Products;

class MyController extends Controller
{
    public function actionIndex()
    {
        $query = Products::find();

        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
        ]);
        $model = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', [
            'model' => $model,
            'pages' => $pages,
            ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionView($id)
    {
        $model = Products::findOne($id);
        return $this->render('view', compact('model'));
    }
}