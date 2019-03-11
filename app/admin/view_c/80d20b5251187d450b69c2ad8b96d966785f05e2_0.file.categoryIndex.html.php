<?php
/* Smarty version 3.1.29, created on 2018-11-08 15:52:42
  from "F:\home\class\day27\code\blog33\app\admin\view\Category\categoryIndex.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be3eb4a74b304_09742062',
  'file_dependency' => 
  array (
    '80d20b5251187d450b69c2ad8b96d966785f05e2' => 
    array (
      0 => 'F:\\home\\class\\day27\\code\\blog33\\app\\admin\\view\\Category\\categoryIndex.html',
      1 => 1541663559,
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
function content_5be3eb4a74b304_09742062 ($_smarty_tpl) {
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
                    <div class="titlebar">	<h2>分类管理</h2>	<p>分类列表</p></div>

                    <div class="clear"></div>
                </div>
            </div>
            <!-- end page title -->

            <!-- START CONTENT -->
            <div class="content">
                <!-- START TABLE -->
                <div class="simplebox grid740">

                    <div class="titleh">
                        <h3>分类列表</h3>
                    </div>

                    <table id="myTable" class="tablesorter">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>名称</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php
$_from = $_smarty_tpl->tpl_vars['cats']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cats_val_0_saved_item = isset($_smarty_tpl->tpl_vars['cats_val']) ? $_smarty_tpl->tpl_vars['cats_val'] : false;
$__foreach_cats_val_0_saved_key = isset($_smarty_tpl->tpl_vars['cats_key']) ? $_smarty_tpl->tpl_vars['cats_key'] : false;
$_smarty_tpl->tpl_vars['cats_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cats_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cats_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cats_key']->value => $_smarty_tpl->tpl_vars['cats_val']->value) {
$_smarty_tpl->tpl_vars['cats_val']->_loop = true;
$__foreach_cats_val_0_saved_local_item = $_smarty_tpl->tpl_vars['cats_val'];
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['cats_val']->value['id'];?>
</td>
								<td><?php echo str_repeat('-- ',$_smarty_tpl->tpl_vars['cats_val']->value['space']);
echo $_smarty_tpl->tpl_vars['cats_val']->value['name'];?>
</td>
								<td>
									<a href="#">编辑</a>
									<a href="<?php echo C('domain.main');?>
/index.php?p=admin&m=cat&a=del&id=<?php echo $_smarty_tpl->tpl_vars['cats_val']->value['id'];?>
" onClick="return confirm('确定删除当前分类：<?php echo $_smarty_tpl->tpl_vars['cats_val']->value['name'];?>
?');">删除</a>
								</td>
							</tr>
						<?php
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_0_saved_local_item;
}
if ($__foreach_cats_val_0_saved_item) {
$_smarty_tpl->tpl_vars['cats_val'] = $__foreach_cats_val_0_saved_item;
}
if ($__foreach_cats_val_0_saved_key) {
$_smarty_tpl->tpl_vars['cats_key'] = $__foreach_cats_val_0_saved_key;
}
?>
                        </tbody>
                    </table>
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
