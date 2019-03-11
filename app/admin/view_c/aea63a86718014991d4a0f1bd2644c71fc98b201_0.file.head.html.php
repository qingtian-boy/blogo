<?php
/* Smarty version 3.1.29, created on 2018-11-09 09:19:57
  from "F:\home\class\day28\code\blog33\app\admin\view\Common\head.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be4e0bd3ab120_60546652',
  'file_dependency' => 
  array (
    'aea63a86718014991d4a0f1bd2644c71fc98b201' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\admin\\view\\Common\\head.html',
      1 => 1541665543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4e0bd3ab120_60546652 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>博客后台</title>
    <link rel="stylesheet" type="text/css" href="<?php echo C('domain.main');?>
/public/admin/css/app.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/js/app.js"><?php echo '</script'; ?>
>
	<?php if (isset($_smarty_tpl->tpl_vars['tag']->value) && $_smarty_tpl->tpl_vars['tag']->value == 'article') {?>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo C('domain.main');?>
/public/admin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
	<?php }?>
</head>
<?php }
}
