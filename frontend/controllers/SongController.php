<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Song;
use yii\web\Controller;

class SongController extends Controller
{
    public function actionShowsong() // Again the "actionShowSong" name doesn't work(
    {
        $model = new Song();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('song-details', ['model' => $model]);
        } else {
            return $this->render('song', ['model' => $model]);
        }
    }
}