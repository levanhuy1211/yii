<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int $type_id
 * @property string $type_name
 * @property string $type_slug
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_name', 'type_slug', 'created_at', 'updated_at'], 'required'],
            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['type_name', 'type_slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'ID',
            'type_name' => 'Name',
            'type_slug' => 'Slug',
            'status' => 'Status',
            'created_at' => 'Created Time',
            'updated_at' => 'Updated Time',
        ];
    }
    
    public function getAllType(){
        $type = Type::find()->asArray()->where(['status' => '1'])->all();
        return $type;
    }
}
