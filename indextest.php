<?php
/***************************************************************
 * 第一步 浏览者    ->    调用控制器，对他发出指令
 * 第二步 控制器    ->    按指令选取一个合适的模型
 * 第三步 模型        ->    按控制器指令取相应数据
 * 第四步 浏览者    ->    按指令选取相应视图
 * 第五步 浏览者    ->    把第三步取到的数据按用户想要的样子显示出来
 ***************************************************************/
/*require_once('/libs/Controller/testController.class.php');
require_once('/libs/Model/testModel.class.php');
require_once('/libs/View/testView.class.php');

$testController = new testController();
$testController->show();*/





/**************************************************************************************************
 * 入口文件的改造
 * 1.统一入口文件为首的URL格式
 * 2.在入口文件里使用安全的方式接收传递来的控制器名和方法名
***************************************************************************************************/
//url格式  indextest.php?controller=控制器名&method=方法名
require_once ('framework/function/function.php');
$controllerAllow = array('test', 'index');
$methodAllow = array('test', 'index','show');
$controller = in_array($_GET['controller'], $controllerAllow) ? daddslashes($_GET['controller']) : 'index';
$method = in_array($_GET['method'], $methodAllow) ? daddslashes($_GET['method']) : 'index';
C($controller,$method);
?>