<?php
/**
 * Created by PhpStorm.
 * User: Jennie
 * Date: 2017/4/15
 * Time: 17:15
 */
function C($name,$method){
    require_once ('/libs/Controller/'.$name.'Controller.class.php');
    /*$testController = new testController();
    $testController->show();*/
    /*eval('$obj = new '.$name.'Controller();
    $obj->'.$method.'();');*/
    //eval()函数调用简单但是不安全，可以用下面的代码代替：
    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
}

function M($name){
    require_once ('libs/Model/'.$name.'Model.class.php');
    $model = $name.'Model';
    $obj = new $model();
    return $obj;
}

function V($name){
    require_once ('libs/View/'.$name.'View.class.php');
    $view = $name.'View';
    $obj = new $view();
    return $obj;
}
function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}