<?php
/* Smarty version 3.1.29, created on 2018-11-08 15:30:33
  from "F:\home\class\day27\code\blog33\app\admin\view\User\userIndex.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be3e619d90a82_37550096',
  'file_dependency' => 
  array (
    '8f258278b0a28959d133d709f3f336d0d5f7054a' => 
    array (
      0 => 'F:\\home\\class\\day27\\code\\blog33\\app\\admin\\view\\User\\userIndex.html',
      1 => 1541466975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3e619d90a82_37550096 ($_smarty_tpl) {
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
</head>
<body>
<div class="wrapper">

    <!-- START HEADER -->
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
/public/admin/img/simple-profile-img.jpg" width="33" height="33" alt="profile"/> <span>管理员</span> <b>昵称：xiaozhangsan</b>
            </a>

            <div class="profilemenu">
            	<ul>
                	<li><a href="#">退出</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- END HEADER -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
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
								<a href="../article/articleIndex.html"><img src="<?php echo C('domain.main');?>
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
        </div>
        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page">
            <!-- start page title -->
            <div class="page-title">
                <div class="in">
                    <div class="titlebar">	<h2>用户管理</h2>	<p>用户列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>用户列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>#ID</th>
                            <th>帐号</th>
                            <th>昵称</th>
                            <th>头像</th>
							<th>是否为管理员</th>
                            <th>注册时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_users_val_0_saved_item = isset($_smarty_tpl->tpl_vars['users_val']) ? $_smarty_tpl->tpl_vars['users_val'] : false;
$__foreach_users_val_0_saved_key = isset($_smarty_tpl->tpl_vars['users_key']) ? $_smarty_tpl->tpl_vars['users_key'] : false;
$_smarty_tpl->tpl_vars['users_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['users_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['users_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['users_key']->value => $_smarty_tpl->tpl_vars['users_val']->value) {
$_smarty_tpl->tpl_vars['users_val']->_loop = true;
$__foreach_users_val_0_saved_local_item = $_smarty_tpl->tpl_vars['users_val'];
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['users_key']->value+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['users_val']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['users_val']->value['acc'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['users_val']->value['nickname'];?>
</td>
                            <td><img src="<?php echo C('domain.main');?>
/<?php echo $_smarty_tpl->tpl_vars['users_val']->value['headimg'];?>
" style="width:20px; height:20px;" /></td>
							<?php if ($_smarty_tpl->tpl_vars['users_val']->value['type'] == 0) {?><td style="color:red;">否</td><?php } else { ?><td style="color:green;">是</td><?php }?>
                            <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['users_val']->value['post_date']);?>
</td>
                            <td>
                                <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=del&id=<?php echo $_smarty_tpl->tpl_vars['users_val']->value['id'];?>
">删除</a>
                                <a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=upd&id=<?php echo $_smarty_tpl->tpl_vars['users_val']->value['id'];?>
">编辑</a>
                            </td>
                        </tr>
						<?php
$_smarty_tpl->tpl_vars['users_val'] = $__foreach_users_val_0_saved_local_item;
}
if ($__foreach_users_val_0_saved_item) {
$_smarty_tpl->tpl_vars['users_val'] = $__foreach_users_val_0_saved_item;
}
if ($__foreach_users_val_0_saved_key) {
$_smarty_tpl->tpl_vars['users_key'] = $__foreach_users_val_0_saved_key;
}
?>
                        </tbody>
                    </table>
                    <ul class="pagination">
                        <li><a href="#">上一页</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">下一页</a></li>
                    </ul>
                </div>
                <!-- END TABLE -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END PAGE -->
        <div class="clear"></div>
    </div>
    <!-- END MAIN -->

    <!-- START FOOTER -->
    <div id="footer">
        <div class="left-column">© Copyright 2016 - 保留所有权利.</div>
    </div>
    <!-- END FOOTER -->
</div>
</body>
</html><?php }
}
