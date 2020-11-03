<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;

class MobileHeader extends Widget{
    public $message;

    public function init(){
        parent::init();
    }

    public function run(){
        $category = new Category();
        $dataCat = $category->getAllRoot();
        return $this->render('mobileHeader',['dataCat'=>$dataCat]);
    }
}
