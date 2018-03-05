<?php

use yii\db\Migration;

/**
 * Handles the creation of table `actores`.
 */
class m180305_123611_create_actores_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('actores', [
            "id" => $this->primaryKey(),
            "nombre_real" => $this->string()->notNull(),
            "nombre_celebridad" => $this->string()->notNull(),
            "fecha" => $this->datetime()->notNull(),
            "sexo" => $this->string()->notNull(),
            "oscars_ganados" => $this->integer()->notNull(),
            "nominaciones_oscar" => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('actores');
    }
}
