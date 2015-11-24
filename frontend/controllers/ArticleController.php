<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use app\models\AddArticleForm;

class ArticleController extends Controller
{
    public function actionAdd()
    {
        $model = new AddArticleForm();

        if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        } elseif ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('article-confirm', ['model' => $model]);
        } else {
            return $this->render('article', ['model' => $model]);
        }
    }
}

