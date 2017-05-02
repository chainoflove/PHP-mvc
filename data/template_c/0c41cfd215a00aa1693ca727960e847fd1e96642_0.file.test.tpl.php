<?php
/* Smarty version 3.1.30, created on 2017-04-16 21:08:41
  from "D:\WWW\mvc\tpl\test.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f36cd9992491_44196217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c41cfd215a00aa1693ca727960e847fd1e96642' => 
    array (
      0 => 'D:\\WWW\\mvc\\tpl\\test.tpl',
      1 => 1492348102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_58f36cd9992491_44196217 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'D:\\WWW\\mvc\\libs\\ORG\\Smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\WWW\\mvc\\libs\\ORG\\Smarty\\plugins\\modifier.date_format.php';
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>


<br />
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['arr']->value['articleContent']['title']);?>

<?php echo ($_smarty_tpl->tpl_vars['arr']->value['articleContent']['author']).(' love').('you');?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['arr']->value['aaa'])===null||$tmp==='' ? "adsfa" : $tmp);?>

<br />
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%H:%M:%S");?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%B:%e:%Y");?>

<br />
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');?>

<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8');?>

<?php echo nl2br($_smarty_tpl->tpl_vars['happy']->value);?>

<br />
<?php
$__section_article_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_article']) ? $_smarty_tpl->tpl_vars['__smarty_section_article'] : false;
$__section_article_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['articleList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_article_0_total = $__section_article_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_article'] = new Smarty_Variable(array());
if ($__section_article_0_total != 0) {
for ($__section_article_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] = 0; $__section_article_0_iteration <= $__section_article_0_total; $__section_article_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']++){
?>
    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['articleList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_article']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_article']->value['index'] : null)]['content'];?>

    <br />
<?php
}
}
if ($__section_article_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_article'] = $__section_article_0_saved;
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleList']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

    <br />
    <?php
}
} else {
?>

    当前没有文章
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articleList']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
    <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

    <br />
    <?php
}
} else {
?>

    当前没有文章
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php echo $_smarty_tpl->tpl_vars['myObj']->value->meth1(array('苹果','红了'));?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sitename'=>"慕课网"), 0, false);
}
}
