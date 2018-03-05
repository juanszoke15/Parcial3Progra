<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actores".
 *
 * @property int $id
 * @property string $nombre_real
 * @property string $nombre_celebridad
 * @property string $fecha
 * @property string $sexo
 * @property int $oscars_ganados
 * @property int $nominaciones_oscar
 */
class Actores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_real', 'nombre_celebridad', 'fecha', 'sexo', 'oscars_ganados', 'nominaciones_oscar'], 'required'],
            [['fecha'], 'safe'],
            [['oscars_ganados', 'nominaciones_oscar'], 'integer'],
            [['nombre_real', 'nombre_celebridad', 'sexo'], 'string', 'max' => 255],
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
            'nombre_celebridad' => 'Nombre Celebridad',
            'fecha' => 'Fecha',
            'sexo' => 'Sexo',
            'oscars_ganados' => 'Oscars Ganados',
            'nominaciones_oscar' => 'Nominaciones Oscar',
        ];
    }


  
}
