<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Qqthree;

class QqthreeController extends Controller
{
    public function actionIndex()
    {
        $query = Qqthree::find();

        return $this->render('index', [
            'countries' => $query,
            
        ]);
    }

    public function actionShow()
    {
        $query = Qqthree::find();

        return $this->render('Show', [
            'countries' => $query,
            
        ]);
    }
}
