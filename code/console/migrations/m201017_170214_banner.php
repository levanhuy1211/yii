<?php

use yii\db\Migration;

/**
 * Class m201017_170214_banner
 */
class m201017_170214_banner extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%banner}}', [
            'banner_id' => $this->primaryKey(),
            'pro_id'=> $this->integer(),
            'banner_image'=> $this->string(),
            'banner_text_top' => $this->string()->notNull(),
            'banner_text_dow' => $this->string()->notNull(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }
    public function down()
    {
       $this->dropTable('{{%banner}}');
    }
}
