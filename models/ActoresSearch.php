<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Actores;

/**
 * ActoresSearch represents the model behind the search form of `app\models\Actores`.
 */
class ActoresSearch extends Actores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'oscars_ganados', 'nominaciones_oscar'], 'integer'],
            [['nombre_real', 'nombre_celebridad', 'fecha', 'sexo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Actores::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'fecha' => $this->fecha,
            'sexo' => $this->sexo,
            'oscars_ganados' => $this->oscars_ganados,
            'nominaciones_oscar' => $this->nominaciones_oscar,
        ]);

        $query->andFilterWhere(['like', 'nombre_real', $this->nombre_real])
            ->andFilterWhere(['like', 'nombre_celebridad', $this->nombre_celebridad]);

        return $dataProvider;
    }
}
