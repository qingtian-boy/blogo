<?php
/* Smarty version 3.1.29, created on 2018-11-09 16:10:52
  from "F:\home\class\day28\code\blog33\app\home\view\blogShowList.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be5410c340085_56065958',
  'file_dependency' => 
  array (
    '850e87825c020ef71947615ddc47adce86b8ddf7' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\home\\view\\blogShowList.html',
      1 => 1541750935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be5410c340085_56065958 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>博文列表</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link href="<?php echo C('domain.main');?>
/public/home/css/app.css" rel="stylesheet" media="screen">
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/modernizr.custom.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/detectizr.min.js"><?php echo '</script'; ?>
>
</head>

<!-- Body -->
<body>
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <button type="button" class="close-btn" data-dismiss="modal" aria-label="关闭"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content text-center">
          <h4>登录</h4>
          <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=login">
            <input type="username" name="acc" class="form-control" placeholder="请您填写帐号" required>
            <input type="password" name="pwd" class="form-control" placeholder="请您填写密码" required>
            <div class="form-group">
              <button type="submit" class="btn login-btn btn-default waves-effect waves-light">立刻登录<i class="icon-head"></i></button>
            </div>
            <div class="text-left">
              <span class="text-sm text-semibold">新用户? <a href="#" data-toggle="modal" data-target="#registerModal">立即注册</a></span>
            </div>
          </form><!-- <form> -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal.fade -->

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <button type="button" class="close-btn" data-dismiss="modal" aria-label="关闭"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content text-center">
          <h4>注册</h4>
          <form method="post" action="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=register">
            <input name="acc" type="text" class="form-control" placeholder="请您填写帐号" required>
            <input name="nickname" type="text" class="form-control" placeholder="请您填写昵称" required>
            <input name="pwd" type="password" class="form-control" placeholder="请您填写密码" required>
            <div class="form-group">
              <button type="submit" class="btn login-btn btn-default waves-effect waves-light">立刻注册<i class="icon-head"></i></button>
            </div>
            <div class="text-left">
              <span class="text-sm text-semibold">已注册? <a href="#" data-toggle="modal" data-target="#loginModal">立即登录</a></span>
            </div>
          </form><!-- <form> -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal.fade -->

    <!-- Navbar -->
    <!-- Add class ".navbar-sticky" to make navbar stuck when it hits the top of the page. Another modifier class is: "navbar-fullwidth" to stretch navbar and make it occupy 100% of the page width. The screen width at which navbar collapses can be controlled through the variable "$nav-collapse" in sass/variables.scss -->
    <header class="navbar">
      
      <!-- Toolbar -->
      <div class="topbar">
        <div class="container">
          <a href="" class="site-logo">
            博文前台
          </a><!-- .site-logo -->

          <!-- Mobile Menu Toggle -->
          <div class="nav-toggle"><span></span></div>

          <div class="toolbar">
		<?php if (isset($_SESSION['home'])) {?>
			<span>欢迎 <?php echo $_SESSION['home']['nickname'];?>
 登陆博客系统<span>
            <a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=logout" class="btn btn-sm btn-default btn-icon-right waves-effect waves-light" data-toggle="modal">退出登录</a>
		<?php } else { ?>
            <a href="#" class="btn btn-sm btn-default btn-icon-right waves-effect waves-light" data-toggle="modal" data-target="#loginModal">立刻登录 <i class="icon-head"></i></a>
		<?php }?>
          </div><!-- .toolbar -->
        </div><!-- .container -->
      </div><!-- .topbar -->
    </header><!-- .navbar -->

    <!-- Page Title -->
    <!--Add modifier class : "pt-fullwidth" to stretch page title and make it occupy 100% of the page width. -->
    <section class="page-title">
      <div class="container">
        <div class="inner">
          <div class="column">
            <div class="title">
              <h1>博文内容列表</h1>
            </div><!-- .title -->
          </div><!-- .column -->
          <div class="column">
          </div><!-- .column -->
        </div>
      </div>
    </section><!-- .page-title -->

    <!-- Container -->
    <div class="container">
      <div class="row">

        <!-- Content -->
        <div class="col-lg-9 col-md-8">


          <!-- Post -->
		  <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_articles_val_0_saved_item = isset($_smarty_tpl->tpl_vars['articles_val']) ? $_smarty_tpl->tpl_vars['articles_val'] : false;
$_smarty_tpl->tpl_vars['articles_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['articles_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['articles_val']->value) {
$_smarty_tpl->tpl_vars['articles_val']->_loop = true;
$__foreach_articles_val_0_saved_local_item = $_smarty_tpl->tpl_vars['articles_val'];
?>
          <article class="post-item">
            <div class="post-body">
              <div class="post-meta">
                <div class="column">
                  <span>
                    <i class="icon-head"></i>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['user_nickname'];?>
</a>
                  </span>
                  <span>在</span>
                  <span>
                    <i class="icon-ribbon"></i>
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['cat_name'];?>
</a>
                  </span>
                  <span>下发布</span>
                  <span class="post-comments">
                    <i class="icon-speech-bubble"></i>
                    <a href="#">评论数：<?php echo $_smarty_tpl->tpl_vars['articles_val']->value['comment_num'];?>
</a>
                  </span>
                </div>
                <div class="column"><span><?php echo date('Y-m-d H:i',$_smarty_tpl->tpl_vars['articles_val']->value['pubtime']);?>
</span></div>
              </div><!-- .post-meta -->
              <h3 class="post-title"><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['title'];?>
</h3>
              <p><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['intro'];?>
</p>
              <a href="<?php echo C('domain.main');?>
/index.php?p=home&m=index&a=info&id=<?php echo $_smarty_tpl->tpl_vars['articles_val']->value['id'];?>
">点击阅读更多</a>
            </div><!-- .post-body -->
          </article><!-- .post-item -->
		  <?php
$_smarty_tpl->tpl_vars['articles_val'] = $__foreach_articles_val_0_saved_local_item;
}
if ($__foreach_articles_val_0_saved_item) {
$_smarty_tpl->tpl_vars['articles_val'] = $__foreach_articles_val_0_saved_item;
}
?>

          <!-- Pagination -->
          <ul class="pagination">
             <li><a href='#'>1</a></li>
			 <li><a href='#'>2</a></li>
			 <li><a href='#'>3</a></li>
			 <li><a href='#'>下一页</a></li>
          </ul>
        </div><!-- .col-lg-9.col-md-8 -->


        <!-- Sidebar -->
        <div class="col-lg-3 col-md-4">
          <div class="space-top-2x visible-sm visible-xs"></div>
          <aside class="sidebar">
            <section class="widget widget_search">
              <form method="post" class="search-box">
                <input type="text" class="form-control" placeholder="按标题搜索博文">
                <button type="submit"><i class="icon-search"></i></button>
              </form>
            </section>
            <section class="widget widget_categories">
              <h3 class="widget-title">
                <i class="icon-ribbon"></i>
                分类
              </h3>
              <ul>
			<?php
$_from = $_smarty_tpl->tpl_vars['cats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cats_val_1_saved_item = isset($_smarty_tpl->tpl_vars['cats_val']) ? $_smarty_tpl->tpl_vars['cats_val'] : false;
$_smarty_tpl->tpl_vars['cats_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cats_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cats_val']->value) {
$_smarty_tpl->tpl_vars['cats_val']->_loop = true;
$__foreach_cats_val_1_saved_local_item = $_smarty_tpl->tpl_vars['cats_val'];
?>
				<li><a href="#"><?php echo str_repeat('-- ',$_smarty_tpl->tpl_vars['cats_val']->value['space']);
echo $_smarty_tpl->tpl_vars['cats_val']->value['name'];?>
<span></span></a></li>
			<?php
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_1_saved_local_item;
}
if ($__foreach_cats_val_1_saved_item) {
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_1_saved_item;
}
?>
              </ul>
            </section><!-- .widget.widget_categories -->
            <section class="widget widget_recent_posts">
              <h3 class="widget-title">
                <i class="icon-paper"></i>
                最新博文
              </h3>

			<div class="item">
				<div class="thumb">
					<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/img/blog/sidebar/post01.jpg" alt="Post01"></a>
				</div>
				<div class="info">
					<h4><a href="#">双椒鱼头</a></h4>
				</div>
			</div><!-- .item -->

			<div class="item">
				<div class="thumb">
					<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/img/blog/sidebar/post01.jpg" alt="Post01"></a>
				</div>
				<div class="info">
					<h4><a href="#">擂钵茄子</a></h4>
				</div>
			</div><!-- .item -->

			<div class="item">
				<div class="thumb">
					<a href="#"><img src="<?php echo C('domain.main');?>
/public/home/img/blog/sidebar/post01.jpg" alt="Post01"></a>
				</div>
				<div class="info">
					<h4><a href="#">蕨菜炒腊肉</a></h4>
				</div>
			</div><!-- .item -->

            </section><!-- .widget.widget_recent_posts -->
            <section class="widget widget_tag_cloud">
              <h3 class="widget-title">
                <i class="icon-tag"></i>
                标签集
              </h3>
              <a href="#">Design</a>
              <a href="#">Development</a>
              <a href="#">Hosting</a>
              <a href="#">Domains</a>
            </section><!-- .widget.widget_tag_cloud -->
          </aside><!-- .sidebar -->
        </div><!-- .col-lg-3.col-md-4 -->
      </div><!-- .row -->
    </div><!-- .container -->

    <!-- Scroll To Top Button -->
    <a href="#" class="scroll-to-top-btn">
      <i class="icon-arrow-up"></i> 
    </a><!-- .scroll-to-top-btn -->

    <!-- Footer -->
    <footer class="footer">
      <div class="bottom-footer">
        <div class="container">
          <div class="copyright">
            <div class="column">
              <p>&copy; 2016. 保留所有权利。</p>
            </div><!-- .column -->
            <div class="column">
            </div><!-- .column -->
          </div><!-- .copyright -->
        </div><!-- .container -->
      </div><!-- .bottom-footer -->
    </footer><!-- .footer -->
    
  </div><!-- .page-wrapper -->

  <!-- JavaScript (jQuery) libraries, plugins and custom scripts -->
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/bootstrap.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/waves.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/placeholder.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/waypoints.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/vendor/velocity.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo C('domain.main');?>
/public/home/js/scripts.js"><?php echo '</script'; ?>
>

</body><!-- <body> -->

</html>
<?php }
}
