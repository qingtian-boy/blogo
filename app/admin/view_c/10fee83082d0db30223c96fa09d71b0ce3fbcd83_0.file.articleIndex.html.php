<?php
/* Smarty version 3.1.29, created on 2018-11-09 11:29:31
  from "F:\home\class\day28\code\blog33\app\admin\view\Article\articleIndex.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be4ff1b2e1827_60819390',
  'file_dependency' => 
  array (
    '10fee83082d0db30223c96fa09d71b0ce3fbcd83' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\admin\\view\\Article\\articleIndex.html',
      1 => 1541734126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Common/head.html' => 1,
    'file:Common/bodyhead.html' => 1,
    'file:Common/sidebar.html' => 1,
  ),
),false)) {
function content_5be4ff1b2e1827_60819390 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="wrapper">
    <!-- START HEADER -->
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/bodyhead.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END HEADER -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START SIDEBAR -->
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:Common/sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- END SIDEBAR -->

        <!-- START PAGE -->
        <div id="page">
            <!-- start page title -->
            <div class="page-title">
                <div class="in">
                    <div class="titlebar">	<h2>博文管理</h2>	<p>博文列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <div class="simplebox grid740" style="z-index: 720;">
                    <div class="titleh" style="z-index: 710;">
                        <h3>搜索</h3>
                    </div>
                    <div class="body" style="z-index: 690;">
                        <form id="form2" name="form2" method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=article&a=lis">
                            <div class="st-form-line" style="z-index: 680;">
                                <span class="st-labeltext">标题</span>
                                <input name="s_title" type="text" class="st-forminput" style="width:510px" value="<?php echo $_smarty_tpl->tpl_vars['s_title']->value;?>
">
                                <div class="clear" style="z-index: 670;"></div>
                            </div>
                            <div class="st-form-line" style="z-index: 640;">
                                <span class="st-labeltext">分类</span>
                                <select class="uniform" name="s_cat_id">
									<option value="0">任意</option>
									<?php
$_from = $_smarty_tpl->tpl_vars['cats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cats_val_0_saved_item = isset($_smarty_tpl->tpl_vars['cats_val']) ? $_smarty_tpl->tpl_vars['cats_val'] : false;
$_smarty_tpl->tpl_vars['cats_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cats_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cats_val']->value) {
$_smarty_tpl->tpl_vars['cats_val']->_loop = true;
$__foreach_cats_val_0_saved_local_item = $_smarty_tpl->tpl_vars['cats_val'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cats_val']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['s_cat_id']->value == $_smarty_tpl->tpl_vars['cats_val']->value['id']) {?>selected<?php }?>><?php echo str_repeat('-- ',$_smarty_tpl->tpl_vars['cats_val']->value['space']);
echo $_smarty_tpl->tpl_vars['cats_val']->value['name'];?>
</option>
									<?php
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_0_saved_local_item;
}
if ($__foreach_cats_val_0_saved_item) {
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_0_saved_item;
}
?>
                                </select>
                                <div class="clear"></div>
                            </div>
                            <div class="button-box" style="z-index: 460;">
                                <input type="submit" id="button" value="提交" class="st-button">
                            </div>
                        </form>

                    </div>
                </div>

                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>博文列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>id</th>
                            <th>所属分类</th>
                            <th>标题</th>
                            <th>简介</th>
                            <th>发布日期</th>
                            <th>发布者昵称</th>
                            <th>评论数量</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_articles_val_1_saved_item = isset($_smarty_tpl->tpl_vars['articles_val']) ? $_smarty_tpl->tpl_vars['articles_val'] : false;
$__foreach_articles_val_1_saved_key = isset($_smarty_tpl->tpl_vars['articles_key']) ? $_smarty_tpl->tpl_vars['articles_key'] : false;
$_smarty_tpl->tpl_vars['articles_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['articles_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['articles_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['articles_key']->value => $_smarty_tpl->tpl_vars['articles_val']->value) {
$_smarty_tpl->tpl_vars['articles_val']->_loop = true;
$__foreach_articles_val_1_saved_local_item = $_smarty_tpl->tpl_vars['articles_val'];
?>
						<tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_key']->value+1;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['cat_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['intro'];?>
</td>
                            <td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['articles_val']->value['pubtime']);?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['user_nickname'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['articles_val']->value['comment_num'];?>
</td>
                            <td>
								 <a href="#" >编辑</a>
                                <a href="#" onClick="return confirm('是否确认删除文章：口味蛙？');">删除</a>
                            </td>
                        </tr>
						<?php
$_smarty_tpl->tpl_vars['articles_val'] = $__foreach_articles_val_1_saved_local_item;
}
if ($__foreach_articles_val_1_saved_item) {
$_smarty_tpl->tpl_vars['articles_val'] = $__foreach_articles_val_1_saved_item;
}
if ($__foreach_articles_val_1_saved_key) {
$_smarty_tpl->tpl_vars['articles_key'] = $__foreach_articles_val_1_saved_key;
}
?>
                        </tbody>
                    </table>
                    <ul class="pagination">
                         <!-- <li><a href='#'>1</a></li> -->
						 <!-- <li><a href='#'>2</a></li> -->
						 <!-- <li><a href='#'>3</a></li> -->
						 <!-- <li><a href='#'>4</a></li> -->
						 <!-- <li><a href='#'>下一页</a></li> -->
						 <?php echo $_smarty_tpl->tpl_vars['pageHtml']->value;?>

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
