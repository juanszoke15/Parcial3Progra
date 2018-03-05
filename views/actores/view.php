<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Actores */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Actores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


$itemsDropDown = [];
$itemsDropDown2 = [];

foreach ($peliculas as $pelicula) {
    if($pelicula['nombre_real'] == $model->nombre_real){
        $itemsDropDown[] = $pelicula['titulo'];
        $itemsDropDown2[] = $pelicula['papel_realizado'];
    }

    
}


$_SESSION['peliculas'] = $itemsDropDown;
$_SESSION['papel'] = $itemsDropDown2;


    

?>


<div class="actores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nombre_real',
            'nombre_celebridad',
            'fecha',
            'sexo',
            'oscars_ganados',
            'nominaciones_oscar',
        ],
    ]) ?>


    <?php 
        $titulos = $_SESSION['peliculas'];
        $papel_actor = $_SESSION['papel'];
        $k =count($titulos);
       // var_dump($titulos);
        //echo $titulos[1];
       // echo count($titulos);
      ?>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Peliculas</th>
        <th>Papel</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
        for($i =0 ; $i < $k ; $i++) {
            
            ?>
                <tr>
                    <td><?= $titulos[$i]?></td>
                    <td><?= $papel_actor[$i] ?></td>
                </tr>
            <?php
        }
       
      ?>

    </tbody>
  </table>

</div>
