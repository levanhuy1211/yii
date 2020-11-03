<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $cat_id
 * @property string $cat_name
 * @property int $par_id
 * @property string $cat_slug
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
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name', 'cat_slug', 'created_at', 'updated_at'], 'required'],
            [['par_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['cat_name', 'cat_slug', 'link_face', 'link_shopee', 'link_larada', 'link_tiki', 'link_youtube', 'link_zalo', 'SEO_title', 'SEO_description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'ID',
            'cat_name' => 'Name',
            'par_id' => 'Parent',
            'cat_slug' => 'Slug',
            'link_face' => 'Link Face',
            'link_shopee' => 'Link Shopee',
            'link_larada' => 'Link Larada',
            'link_tiki' => 'Link Tiki',
            'link_youtube' => 'Link Youtube',
            'link_zalo' => 'Link Zalo',
            'SEO_title' => 'Seo Title',
            'SEO_description' => 'Seo Description',
            'status' => 'Status',
            'created_at' => 'Created Time',
            'updated_at' => 'Updated Time',
        ];
    }
    public $data;
    public function getCategoryPar($par=0,$lever="") {
        $reslt = Category::find()->asArray()->where('par_id = :par_id',['par_id'=>$par])->all();
        $lever .= '-';
        foreach ($reslt as $value) {
            if($reslt == 0){
                $lever = "";
            }
            $this->data[$value['cat_id']] = $lever.$value['cat_name'];
            self::getCategoryPar($value['cat_id'],$lever);
        }
        return $this->data;
    
    }
}
