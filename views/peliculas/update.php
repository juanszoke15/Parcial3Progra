<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */

$this->title = 'Actualizando Datos';
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

$itemsDropDown = [];

foreach ($nombres as $nombre) {
	$itemsDropDown[$nombre->nombre_real] =
	$nombre->nombre_real;
}

?>
<div class="peliculas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'itemsDropDown' =>$itemsDropDown,
    ]) ?>

</div>
