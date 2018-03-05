<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Actores */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 
    $sexo=['Masculino' => 'Masculino', 'Femenino' => 'Femenino'];
 ?>

<div class="actores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_real')->textInput(['maxlength' => true, 'placeholder' => 'nombre']) ?>

    <?= $form->field($model, 'nombre_celebridad')->textInput(['maxlength' => true, 'placeholder' => 'apodo']) ?>

    <?= $form->field($model, 'fecha')->textInput(['placeholder' => 'yy/mm/dd']) ?>

    <?= $form->field($model, 'sexo')->radioList($sexo) ?>

    <?= $form->field($model, 'oscars_ganados')->textInput() ?>

    <?= $form->field($model, 'nominaciones_oscar')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
