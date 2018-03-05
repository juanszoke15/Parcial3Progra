<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nombre_real') ?>

    <?= $form->field($model, 'nombre_celebridad') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'oscars_ganados') ?>

    <?php // echo $form->field($model, 'nominaciones_oscar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
