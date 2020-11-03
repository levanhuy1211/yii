<?php
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class Narbar extends Widget{
    public $message;

    public function init(){
        parent::init();
        $this->render('navbar');
    }

    public function run(){
        return Html::encode($this->message);
    }
}
?>