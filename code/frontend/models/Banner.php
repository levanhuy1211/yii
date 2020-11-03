<?php

namespace frontend\models;

use Yii;

class Banner extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'banner';
    }
    
    public function getAll(){
        $data = Banner::find()->asArray()->where(['status'=>1])->all();
        return $data;       
    }
    public function getCount(){
        $data = Banner::find()->asArray()->where(['status'=>1])->count();
        return $data;       
    }
    
}
