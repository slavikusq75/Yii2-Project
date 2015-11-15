<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Song extends Model
{
    public $songName;
    public $style;
    public $composer;
    public $bitrate;
    public $group;

    public function rules()
    {
        return [
            [['songName'], 'required'],
        ];
    }
}
