<?php

namespace app\controllers;

use app\models\Category;
use app\models\Products;
use yii\data\Pagination;

class CategoryController extends \yii\web\Controller
{
    public function actionView()
    {
        $id = \Yii::$app->request->get('id');
        if($id == 0){
            $query = Products::find();

            $pages = new Pagination([
                'totalCount' => $query->count(),
                'pageSize' => 4,
            ]);
            $model = $query->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('view', [
                'model' => $model,
                'pages' => $pages,
            ]);
        }
        else{
            $category = Category::findOne($id);
            if(empty($category)){
                throw new \yii\web\HttpException(404, "Такой страницы нет");
            }

            $query = Products::find()->
                where(['id_category' => $id])->orderBy('id DESC');

            $pages = new Pagination([
                'totalCount' => $query->count(),
                'pageSize' => 4,
            ]);
            $model = $query->offset($pages->offset)->limit($pages->limit)->all();
            return $this->render('view', [
                'model' => $model,
                'pages' => $pages,
            ]);
        }
    }

}
