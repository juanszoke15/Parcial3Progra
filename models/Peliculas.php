<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peliculas".
 *
 * @property int $id
 * @property string $nombre_real
 * @property string $titulo
 * @property int $year
 * @property string $duracion_minutos
 * @property string $papel_realizado
 */
class Peliculas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'peliculas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_real', 'titulo', 'year', 'duracion_minutos', 'papel_realizado'], 'required'],
            [['year'], 'integer'],
            [['nombre_real', 'titulo', 'duracion_minutos', 'papel_realizado'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_real' => 'Nombre Real',
            'titulo' => 'Titulo',
            'year' => 'Year',
            'duracion_minutos' => 'Duracion Minutos',
            'papel_realizado' => 'Papel Realizado',
        ];
    }
     public function getNombres()
    {
        return $this->hasOne(Actores::className(), ['nombre_real' => 'nombre_real']);
    }

}
