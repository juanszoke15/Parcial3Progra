<?php

use yii\db\Migration;

/**
 * Handles the creation of table `peliculas`.
 */
class m180305_124002_create_peliculas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('peliculas', [
            "id" => $this->primaryKey(),
            "nombre_real"=> $this->string()->notNull(),
            "titulo" => $this->string()->notNull(),
            "year" => $this->integer()->notNull(),
            "duracion_minutos" => $this->string()->notNull(),
            "papel_realizado" => $this->string()->notNull()

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('peliculas');
    }
}
