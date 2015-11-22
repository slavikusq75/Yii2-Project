<?php

use yii\helpers\Html;

?>

<p>Была добавлена следующая статья:</p>

<ul>
    <li><label>Ваш никнейм</label>: <?= Html::encode($model->username) ?></li>
    <li><label>Тема статьи</label>: <?= Html::encode($model->articleTitle) ?></li>
    <li><label>Текст статьи</label>: <?= Html::encode($model->articleText) ?></li>
    <li><label>Автор статьи</label>: <?= Html::encode($model->articleAuthor) ?></li>
</ul>