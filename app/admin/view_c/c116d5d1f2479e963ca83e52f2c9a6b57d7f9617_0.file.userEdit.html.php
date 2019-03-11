<?php
/* Smarty version 3.1.29, created on 2018-11-09 10:40:15
  from "F:\home\class\day28\code\blog33\app\admin\view\User\userEdit.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be4f38f283c21_01742023',
  'file_dependency' => 
  array (
    'c116d5d1f2479e963ca83e52f2c9a6b57d7f9617' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\admin\\view\\User\\userEdit.html',
      1 => 1541468087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4f38f283c21_01742023 ($_smarty_tpl) {
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
                    <div class="titlebar">	<h2>用户管理</h2>	<p>编辑用户</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <div class="simplebox grid740" style="z-index: 720;">
                    <div class="titleh" style="z-index: 710;">
                        <h3>编辑用户</h3>
                    </div>
                    <div class="body" style="z-index: 690;">

                        <form id="form2" name="form2" method="post" enctype="multipart/form-data" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=user&a=updh&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">帐号</span>
                                <input name="acc" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['acc'];?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
							<div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">昵称</span>
                                <input name="nickname" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">角色</span>
                                <label class="margin-right10"><input type="radio" name="type" value="0" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == 0) {?>checked<?php }?> class="uniform"/> 普通用户</label>
                                <label class="margin-right10"><input type="radio" name="type" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['type'] == 1) {?>checked<?php }?> class="uniform"/> 管理员</label>
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
							<div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">头像（不选择则表示使用原来的头像）</span>
                                <input name="headimg" type="file" class="st-forminput" style="width:510px">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>

                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">设置新密码(不设置请留空)</span>
                                <input name="password" type="text" class="st-forminput" style="width:510px" value="">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>

                            <div class="button-box" style="z-index: 460;">
                                <input type="submit" id="button" value="提交" class="st-button">
                            </div>
                        </form>

                    </div>
                </div>
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
