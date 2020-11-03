<?php

namespace frontend\models;

use Yii;
class Category extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }
    public function getAllRoot($par = 0) {
        $data = Category::find()->asArray()->where(['par_id' => 0,'status'=>1])->all();
        return $data;
    }
}
