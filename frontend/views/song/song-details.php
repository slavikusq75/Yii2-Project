<?php
use yii\helpers\Html;
?>
<p>Характеристики:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->songName) ?></li>
    <li><label>Group</label>: <?= Html::encode($model->group) ?></li>
    <li><label>Style</label>: <?= Html::encode($model->style) ?></li>
    <li><label>Composer</label>: <?= Html::encode($model->composer) ?></li>
    <li><label>Bitrate</label>: <?= Html::encode($model->bitrate) ?></li>

</ul>