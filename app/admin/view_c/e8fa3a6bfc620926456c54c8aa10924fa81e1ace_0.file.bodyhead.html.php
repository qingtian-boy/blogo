<?php
/* Smarty version 3.1.29, created on 2018-11-08 15:46:23
  from "F:\home\class\day27\code\blog33\app\admin\view\Common\bodyhead.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be3e9cfc92c00_47696722',
  'file_dependency' => 
  array (
    'e8fa3a6bfc620926456c54c8aa10924fa81e1ace' => 
    array (
      0 => 'F:\\home\\class\\day27\\code\\blog33\\app\\admin\\view\\Common\\bodyhead.html',
      1 => 1541663093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3e9cfc92c00_47696722 ($_smarty_tpl) {
?>
<div id="header">
	<!-- logo -->
	<div class="logo">	<a href="#"><span class="logo-text text-center font18">博客后台</span></a>	</div>

	<!-- notifications -->
	<div id="notifications">
	  <div class="clear"></div>
	</div>

	<!-- quick menu -->
	<div id="quickmenu">
		<a href="" class="qbutton-left tips" title="新增一篇博客">
			<img src="<?php echo C('domain.main');?>
/public/admin/img/icons/header/newpost.png" width="18" height="14" alt="new post" />
		</a>
		<a href="#" target="__blank" class="qbutton-right tips" title="直达前台">
			<img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/magnify.png" width="18" height="14" alt="new post" />
		</a>
		<div class="clear"></div>
	</div>

	<!-- profile box -->
	<div id="profilebox">
		<a href="#" class="display">
			<img src="<?php echo C('domain.main');?>
/<?php echo $_SESSION['admin']['headimg'];?>
" width="33" height="33" alt="profile"/> <span>管理员</span> <b>昵称：<?php echo $_SESSION['admin']['nickname'];?>
</b>
		</a>

		<div class="profilemenu">
			<ul>
				<li><a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=login&a=logout">退出</a></li>
			</ul>
		</div>
	</div>
	<div class="clear"></div>
</div><?php }
}
