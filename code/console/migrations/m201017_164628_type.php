<?php

use yii\db\Migration;

/**
 * Class m201017_164628_type
 */
class m201017_164628_type extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%type}}', [
            'type_id' => $this->primaryKey(),
            'type_name' => $this->string()->notNull(),
            'type_slug' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }
    public function down()
    {
       $this->dropTable('{{%type}}');
    }
}
