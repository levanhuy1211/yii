<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $cf_id
 * @property string $cf_site
 * @property string $cf_phone
 * @property string $cf_email
 * @property string $cf_address
 * @property string $cf_logo1
 * @property string $cf_logo2
 * @property string $cf_logo3
 * @property string $cf_about
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
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cf_site', 'cf_phone', 'cf_email', 'cf_address', 'cf_logo1', 'cf_logo2', 'cf_logo3', 'cf_about', 'created_at', 'updated_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['cf_site', 'cf_phone', 'cf_email', 'cf_address', 'cf_logo1', 'cf_logo2', 'cf_logo3', 'cf_about', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cf_id' => 'Cf ID',
            'cf_site' => 'Cf Site',
            'cf_phone' => 'Cf Phone',
            'cf_email' => 'Cf Email',
            'cf_address' => 'Cf Address',
            'cf_logo1' => 'Cf Logo1',
            'cf_logo2' => 'Cf Logo2',
            'cf_logo3' => 'Cf Logo3',
            'cf_about' => 'Cf About',
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
