<?php

namespace app\models;

use yii\base\Model;

class AddArticleForm extends Model
{
    public $username;
    public $sex;
    public $age;
    public $email;
    public $siteCategory;
    public $articleTitle;
    public $articleTheme;
    public $articleDate;
    public $articleAuthor;
    public $articleText;
    public $articlePhoto;
    public $articleSource;
    public $password;
    public $password_repeat;

    public function attributeLabels()
    {
        return [
            'username' => \Yii::t('app', 'Никнейм'),
            'sex' => \Yii::t('app', 'Пол'),
            'age' => \Yii::t('app', 'Возраст'),
            'email' => \Yii::t('app', 'Электронная почта'),
            'siteCategory' => \Yii::t('app', 'Категория статьи на сайте'),
            'articleTitle' => \Yii::t('app', 'Название статьи'),
            'articleTheme' => \Yii::t('app', 'Тема статьи'),
            'articleDate' => \Yii::t('app', 'Дата написания статьи'),
            'articleAuthor' => \Yii::t('app', 'Автор статьи'),
            'articleText' => \Yii::t('app', 'Текст статьи'),
            'articlePhoto' => \Yii::t('app', 'Добавить фото к статье'),
            'articleSource' => \Yii::t('app', 'Источники для написания статьи'),
            'password' => \Yii::t('app', 'Пароль (для доступа к редактирвоанию статьи в будущем)'),
            'password_repeat' => \Yii::t('app', 'Подтвердить пароль'),
        ];
    }

    public function rules()
    {
        return [
            [['username', 'sex', 'age', 'email', 'siteCategory', 'articleTitle',
                'articleTheme', 'articleDate', 'articleAuthor', 'articleText',
                'password', 'password_repeat'], 'required', 'message' => 'Поле не может быть пустым.'],
            ['email', 'email'],
        ];
    }
}