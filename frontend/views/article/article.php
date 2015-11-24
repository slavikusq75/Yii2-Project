<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

?>

    <h1><b>Форма добавления статьи:</h1><br>

<?php $form = ActiveForm::begin([
    'id' => 'article',
]);
?>

<?= $form->field($model, 'username', ['enableAjaxValidation' => true]) ?>

<?= $form->field($model, 'sex')->radioList(['1'=>'Мужской', '2'=>'Женский']) ?>

<?= $form->field($model, 'age') ?>

<?= $form->field($model, 'email', ['enableAjaxValidation' => true]) ?>

<?= $form->field($model, 'siteCategory')->dropDownList(['a' => 'Наука', 'b' => 'Исскуство', 'c' => 'Мода']) ?>

<?= $form->field($model, 'articleTitle') ?>

<?= $form->field($model, 'articleTheme')->checkboxList(['a' => 'Наука', 'b' => 'Исскуство', 'c' => 'Мода']) ?>

<?= $form->field($model, 'articleAuthor') ?>

<?= $form->field($model, 'articleText')->textarea() ?>

<?= $form->field($model, 'articlePhoto')->fileInput() ?>

<?= $form->field($model, 'articleSource') ?>

<?= $form->field($model, 'articleCopyright')->textInput()->hint('Да или нет') ?>

<?= $form->field($model, 'password')->textInput()->hint('Используется для доступа к редактированию статьи в будущем') ?>

<?= $form->field($model, 'password_repeat') ?>

<?= $form->field($model, 'captcha')->textInput()->hint('Кликните по картинке, чтобы обновить код')->
widget(\yii\captcha\Captcha::classname(), []) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить статью', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>