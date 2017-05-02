<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/17 0017
 * Time: 15:12
 */
header("Content-type:text/html;charset=utf-8");
session_start();
require_once ('config.php');
require_once ('framework/pc.php');
PC::run($config);