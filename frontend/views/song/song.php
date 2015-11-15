<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'songName')->label('Введите название песни:') ?>

    <div class="form-group">
        <?= Html::submitButton('Узнать подробности', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>