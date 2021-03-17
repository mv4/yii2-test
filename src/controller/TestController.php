<?php
namespace vms\controller;

class TestController extends \yii\base\Controller{
    public function actionIndex(){
        var_dump('привет');
        die();
    }
}