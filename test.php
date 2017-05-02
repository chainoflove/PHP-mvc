<?php
/**
 * Created by PhpStorm.
 * User: Jennie
 * Date: 2017/4/15
 * Time: 22:35
 */
require_once ('libs/ORG/Smarty/Smarty.class.php');
$smarty = new Smarty();

//Smarty的自编口诀“五配置两方法”
//五配置的介绍
$smarty->left_delimiter = "{";//左定界符
$smarty->right_delimiter = "}";//右定界符
$smarty->template_dir = "tpl";//HTML模板的地址
$smarty->compile_dir = "template_c";//模板编译生成的文件
$smarty->cache_dir = "cache";//缓存
//以下是开启缓存的另两个配置。因为通常不用Smarty的缓存机制，所以此项为了解。
//$smarty->caching = true;//开启缓存
//$smarty->cache_lifetime = 120;//缓存时间
//两方法
$smarty->assign('articleTitle','Happy New year');
/*$smarty->display('test.tpl');*/

$arr = array('articleContent'=>array("title"=>"wanjia","author"=>"jennie"));
$smarty->assign('arr',$arr);
$smarty->assign('time',time());
$smarty->assign('happy','开心每一天
开心每一天
开心每一天');
$articleList = array(
    array(
        "title"=>"第一篇文章",
        "author"=>"小王",
        "content"=>"第一篇文章改写点啥呢？"
    ),
    array(
        "title"=>"第二篇文章",
        "author"=>"小李",
        "content"=>"又写了一篇不知所云的文章"
    )
);
//$articleList = array();
$smarty->assign("articleList",$articleList);

class My_Object{
    function meth1($params){
        return $params[0].'已经'.$params[1];
    }
}
$myObj = new My_Object();
$smarty->assign('myObj',$myObj);
$smarty->display('test.tpl');