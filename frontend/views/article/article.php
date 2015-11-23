<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username') ?>

<?= $form->field($model, 'sex') ?>

<?= $form->field($model, 'age') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'siteCategory') ?>

<?= $form->field($model, 'articleTitle') ?>

<?= $form->field($model, 'articleTheme') ?>

<?= $form->field($model, 'articleAuthor') ?>

<?= $form->field($model, 'articleText') ?>

<?= $form->field($model, 'articlePhoto') ?>

<?= $form->field($model, 'articleSource') ?>

<?= $form->field($model, 'articleCopyright') ?>

<?= $form->field($model, 'password') ?>

<?= $form->field($model, 'password_repeat') ?>

<?= $form->field($model, 'captcha')->widget(\yii\captcha\Captcha::classname(), [
    // configure additional widget properties here
]) ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить статью', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>