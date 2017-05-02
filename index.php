<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/18 0018
 * Time: 18:22
 */
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('Asia/Shanghai');
require_once ('config.php');
require_once ('framework/pc.php');
PC::run($config);