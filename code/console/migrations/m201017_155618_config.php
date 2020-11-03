<?php

use yii\db\Migration;

/**
 * Class m201017_155618_config
 */
class m201017_155618_config extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%config}}', [
            'cf_id' => $this->primaryKey(),
            'cf_site' => $this->string()->notNull(),
            'cf_phone'=> $this->string()->notNull(),
            'cf_email'=> $this->string()->notNull(),
            'cf_address'=> $this->string()->notNull(),
            'cf_logo1'=> $this->string()->notNull(),
            'cf_logo2'=> $this->string()->notNull(),
            'cf_logo3'=> $this->string()->notNull(),
            'cf_about'=> $this->string()->notNull(),
            'link_face' => $this->string(),
            'link_shopee'=> $this->string(),
            'link_larada'=> $this->string(),
            'link_tiki'=> $this->string(),
            'link_youtube'=> $this->string(),
            'link_zalo'=> $this->string(),
            'SEO_title' => $this->string(),
            'SEO_description' => $this->string(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }
    public function down()
    {
       $this->dropTable('{{%config}}');
    }
}
