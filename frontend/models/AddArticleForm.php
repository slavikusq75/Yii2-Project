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
    public $articleAuthor;
    public $articleText;
    public $articlePhoto;
    public $articleSource;
    public $articleCopyright;
    public $password;
    public $password_repeat;
    public $captcha;

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
            'articleAuthor' => \Yii::t('app', 'Автор статьи'),
            'articleText' => \Yii::t('app', 'Текст статьи'),
            'articlePhoto' => \Yii::t('app', 'Добавить фото к статье'),
            'articleSource' => \Yii::t('app', 'Источники для написания статьи'),
            'articleCopyright' => \Yii::t('app', 'Являетесь ли Вы автором статьи'),
            'password' => \Yii::t('app', 'Пароль'),
            'password_repeat' => \Yii::t('app', 'Подтвердить пароль'),
            'captcha' => \Yii::t('app', 'Введите проверочный код'),
        ];
    }

    public function rules()
    {
        return [
            [
                [
                    'username',
                    'sex',
                    'age',
                    'email',
                    'siteCategory',
                    'articleTitle',
                    'articleTheme',
                    'articleAuthor',
                    'articleText',
                    'password',
                    'password_repeat',
                    'captcha'
                ],
                'required',
                'message' => 'Поле не может быть пустым.'
            ],
            ['username', 'string', 'min' => 4, 'message' => 'Никнейм должен быть не меньше 4 символов'],
            ['username', 'string', 'max' => 24, 'message' => 'Никнейм должен быть не больше 24 символов'],
            [
                'username',
                'match',
                'pattern' => '/^[a-z]\w*$/i',
                'message' => 'Никнейм должен начинаться с буквы, и содержать только буквенные символы латинского
                алфавита, числовые символы и знак подчеркивания.'
            ],

            ['age', 'integer', 'message' => 'Возраст должен быть цифрой'],
            [
                'age',
                'compare',
                'compareValue' => 0,
                'operator' => '>',
                'message' => 'Возраст должен быть не меньше 0 лет'
            ],
            [
                'age',
                'compare',
                'compareValue' => 150,
                'operator' => '<=',
                'message' => 'Возраст должен быть не больше 150 лет.'
            ],
            ['email', 'email', 'message' => 'Электронная почта должна быть подходящей.'],
            [
                ['siteCategory', 'articleTitle', 'articleTheme'],
                'string',
                'max' => 200,
                'message' => 'Не может быть больше 200 символов.'
            ],
            ['articleText', 'string', 'max' => 50000, 'message' => 'Не может быть больше 50 000 символов.'],
            [
                'articlePhoto',
                'file',
                'extensions' => ['png', 'jpg', 'gif'],
                'message' => 'Фото может быть только в формате: png, jpg, gif.'
            ],
            [
                'articlePhoto',
                'file',
                'maxSize' => 1024 * 1024,
                'message' => 'Фото слишком большое. Размер не должен превышать 1 Мб.'
            ],
            [
                'articlePhoto',
                'image',
                'minWidth' => 300,
                'maxWidth' => 2000,
                'minHeight' => 300,
                'maxHeight' => 2000,
                'message' => 'Фото не может быть меньше 300*300 пикселей и больше 2000*2000 пикселей.'
            ],
            ['articleSource', 'default', 'value' => 'https://www.wikipedia.org/'],
            [
                'articleCopyright',
                'in',
                'range' => ['Да', 'Нет', 'да', 'нет'],
                'message' => 'Ответ должен быть "да" или "нет".'
            ],
            ['password', 'compare', 'message' => 'Пароли должны совпадать.'],
            [
                'password',
                'match',
                'pattern' => '/^[a-z]\w*$/i',
                'message' => 'Пароль должен начинаться с буквы, и содержать только буквенные символы латинского
                алфавита, числовые символы и знак подчеркивания.'
            ],
            ['articleSource', 'url', 'message' => 'Источники для написания статьи должны быть ссылками.'],
            ['captcha', 'captcha', 'message' => 'Не верный проверочный код.'],
        ];
    }
}