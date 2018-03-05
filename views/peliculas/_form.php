<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */
/* @var $form yii\widgets\ActiveForm */
?>




<div class="peliculas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_real')->dropDownList($itemsDropDown) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'duracion_minutos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'papel_realizado')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
