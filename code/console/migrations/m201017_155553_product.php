<?php

use yii\db\Migration;

/**
 * Class m201017_155553_product
 */
class m201017_155553_product extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%product}}', [
            'pro_id' => $this->primaryKey(),
            'pro_name' => $this->string()->notNull(),
            'pro_slug' => $this->string()->notNull(),
            'cat_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'pro_image1' => $this->string()->notNull(),
            'pro_image2' => $this->string()->notNull(),
            'pro_image3' => $this->string()->notNull(),
            'pro_image4' => $this->string()->notNull(),
            'pro_price' => $this->integer()->notNull(),
            'pro_old_price' => $this->integer()->notNull(),
            'pro_total'=> $this->integer(),
            'pro_content' => $this->text(),
            'link_face' => $this->string(),
            'link_shopee'=> $this->string(),
            'link_larada'=> $this->string(),
            'link_tiki'=> $this->string(),
            'link_youtube'=> $this->string(),
            'link_zalo'=> $this->string(),
            'SEO_title' => $this->string(),
            'SEO_description' => $this->string(),
            'pro_location'=> $this->integer(),
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
