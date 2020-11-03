<?php

namespace backend\models;

use Yii;
/**
 * This is the model class for table "product".
 *
 * @property int $pro_id
 * @property string $pro_name
 * @property string $pro_slug
 * @property int $cat_id
 * @property int $type_id
 * @property string $pro_image1
 * @property string $pro_image2
 * @property string $pro_image3
 * @property string $pro_image4
 * @property int $pro_price
 * @property int $pro_old_price
 * @property int|null $pro_total
 * @property string|null $pro_content
 * @property string|null $link_face
 * @property string|null $link_shopee
 * @property string|null $link_larada
 * @property string|null $link_tiki
 * @property string|null $link_youtube
 * @property string|null $link_zalo
 * @property string|null $SEO_title
 * @property string|null $SEO_description
 * @property int $pro_location
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_name', 'pro_slug', 'cat_id', 'type_id', 'pro_image1', 'pro_image2', 'pro_price', 'pro_old_price', 'created_at', 'updated_at'], 'required'],
            [['cat_id', 'type_id', 'pro_price', 'pro_old_price', 'pro_total','pro_location', 'status'], 'integer'],
            [['pro_content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['pro_name', 'pro_slug', 'pro_image1', 'pro_image2', 'pro_image3', 'pro_image4', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'Pro ID',
            'pro_name' => 'Pro Name',
            'pro_slug' => 'Pro Slug',
            'cat_id' => 'Cat ID',
            'type_id' => 'Type ID',
            'pro_image1' => 'Pro Image1',
            'pro_image2' => 'pro_image2',
            'pro_image3' => 'Pro Image3',
            'pro_image4' => 'pro_image4',
            'pro_price' => 'Pro Price',
            'pro_old_price' => 'Pro Old Price',
            'pro_total' => 'Pro Total',
            'pro_content' => 'Pro Content',
            'link_face' => 'Link Face',
            'link_shopee' => 'Link Shopee',
            'link_larada' => 'Link Larada',
            'link_tiki' => 'Link Tiki',
            'link_youtube' => 'Link Youtube',
            'link_zalo' => 'Link Zalo',
            'SEO_title' => 'Seo Title',
            'SEO_description' => 'Seo Description',
            'pro_location' =>  'Pro Location',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getAll(){
        $data = Product::find()->asArray()->where(['status' => '1'])->all();
        return $data;
    }
}