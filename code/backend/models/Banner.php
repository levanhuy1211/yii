<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $banner_id
 * @property int $pro_id
 * @property string $banner_image
 * @property string $banner_text_top
 * @property string $banner_text_dow
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pro_id', 'banner_image', 'banner_text_top', 'banner_text_dow', 'created_at', 'updated_at'], 'required'],
            [['pro_id', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['banner_image', 'banner_text_top', 'banner_text_dow'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => 'Banner ID',
            'pro_id' => 'Pro ID',
            'banner_image' => 'Banner Image',
            'banner_text_top' => 'Banner Text Top',
            'banner_text_dow' => 'Banner Text Dow',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
