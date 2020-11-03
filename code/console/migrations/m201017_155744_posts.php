<?php

use yii\db\Migration;

/**
 * Class m201017_155744_posts
 */
class m201017_155744_posts extends Migration
{
  public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%posts}}', [
            'post_id' => $this->primaryKey(),
            'post_name' => $this->string()->notNull(),
            'post_slug' => $this->string()->notNull(),
            'post_content' => $this->text(),
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
       $this->dropTable('{{%category}}');
    }
}
