<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'username') ?>

<?= $form->field($model, 'sex') ?>

<?= $form->field($model, 'age') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'siteCategory') ?>

<?= $form->field($model, 'articleTitle') ?>

<?= $form->field($model, 'articleTheme') ?>

<?= $form->field($model, 'articleDate') ?>

<?= $form->field($model, 'articleAuthor') ?>

<?= $form->field($model, 'articleText') ?>

<?= $form->field($model, 'articlePhoto') ?>

<?= $form->field($model, 'articleSource') ?>

<?= $form->field($model, 'password') ?>

<?= $form->field($model, 'password_repeat') ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить статью', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>