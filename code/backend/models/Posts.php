<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $post_id
 * @property string $post_name
 * @property string $post_slug
 * @property string|null $post_content
 * @property string|null $link_face
 * @property string|null $link_shopee
 * @property string|null $link_larada
 * @property string|null $link_tiki
 * @property string|null $link_youtube
 * @property string|null $link_zalo
 * @property string|null $SEO_title
 * @property string|null $SEO_description
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_name', 'post_slug', 'created_at', 'updated_at'], 'required'],
            [['post_content'], 'string'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['post_name', 'post_slug', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_name' => 'Post Name',
            'post_slug' => 'Post Slug',
            'post_content' => 'Post Content',
            'link_face' => 'Link Face',
            'link_shopee' => 'Link Shopee',
            'link_larada' => 'Link Larada',
            'link_tiki' => 'Link Tiki',
            'link_youtube' => 'Link Youtube',
            'link_zalo' => 'Link Zalo',
            'SEO_title' => 'Seo Title',
            'SEO_description' => 'Seo Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
