<?php
/* Smarty version 3.1.29, created on 2018-11-09 09:24:58
  from "F:\home\class\day28\code\blog33\app\admin\view\Common\sidebar.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be4e1ea34d525_21254253',
  'file_dependency' => 
  array (
    'fdeab4acf11132115e1781813e50b7ac3a3a5033' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\admin\\view\\Common\\sidebar.html',
      1 => 1541726499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4e1ea34d525_21254253 ($_smarty_tpl) {
?>
<div id="sidebar">
	<div id="searchbox" style="z-index: 880;">
		<div class="in" style="z-index: 870;">
			<p class="text-center font18 line-height35">此广告位常年招商</p>
		</div>
	</div>
	<!-- start sidemenu -->
	<div id="sidemenu">
		<ul>
			<li class="active"><a href="index.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/laptop.png" width="16" height="16" alt="icon"/>控制面板</a></li>
			<!-- 分类管理 -->
			<li class="subtitle">
				<a class="action tips-right" href="#" title="分类管理">
					<img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/key.png" width="16" height="16" alt="icon"/>分类管理<img src="<?php echo C('domain.main');?>
/public/admin/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" />
				</a>
				<ul class="submenu display-block">
					<li><a href="../category/categoryIndex.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>分类列表</a></li>
					<li><a href="../category/categoryAdd.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加分类</a></li>
				</ul>
			</li>
			<!-- 分类管理 -->

			<!-- 博文管理 -->
			<li class="subtitle">
				<a class="action tips-right" href="#" title="博文管理">
					<img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/mail.png" width="16" height="16" alt="icon"/>博文管理<img src="<?php echo C('domain.main');?>
/public/admin/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" />
				</a>
				<ul class="submenu display-block">
					<li>
						<a href="../article/articleAdd.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file_add.png" width="16" height="16" alt="icon"/>添加博文</a>
					</li>
					<li>
						<a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=lis"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>博文列表</a>
					</li>
				</ul>
			</li>
			<!-- 博文管理 -->

			<!-- 用户管理 -->
			<li class="subtitle">
				<a class="action tips-right" href="#" title="用户管理"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/user.png" width="16" height="16" alt="icon"/>用户管理<img src="<?php echo C('domain.main');?>
/public/admin/img/arrow-down.png" width="7" height="4" alt="arrow" class="arrow" /></a>
				<ul class="submenu display-block">
					<li>
						<a href="../user/userAdd.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/user_add.png" width="16" height="16" alt="icon"/>添加用户</a>
					</li>
					<li>
						<a href="../user/userIndex.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>用户列表</a>
					</li>
				</ul>
			</li>
			<!-- 用户管理 -->

			<!-- 评论管理 -->
			<li>
				<a href="../comment/commentIndex.html"><img src="<?php echo C('domain.main');?>
/public/admin/img/icons/sidemenu/file.png" width="16" height="16" alt="icon"/>评论列表</a>
			</li>
			<!-- 评论管理 -->
		</ul>
	</div>
	<!-- end sidemenu -->
</div><?php }
}
