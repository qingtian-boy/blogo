<?php
/* Smarty version 3.1.29, created on 2018-11-09 11:35:34
  from "F:\home\class\day28\code\blog33\app\admin\view\Privilege\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5be50086283c21_76481804',
  'file_dependency' => 
  array (
    '625ec118fef6626a131300825d621473e96abddf' => 
    array (
      0 => 'F:\\home\\class\\day28\\code\\blog33\\app\\admin\\view\\Privilege\\login.html',
      1 => 1541734499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be50086283c21_76481804 ($_smarty_tpl) {
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
    <div class="loginform">
    	<div class="title"> <span class="logo-text font18">博客后台管理系统</span></div>
        <div class="body">
       	  <form id="form1" name="form1" method="post" action="<?php echo C('domain.main');?>
/index.php?p=admin&m=login&a=loginh">
          	<label class="log-lab">帐号</label>
            <input name="acc" type="text" class="login-input-user" id="textfield" value=""/>
          	<label class="log-lab">密码</label>
            <input name="password" type="password" class="login-input-pass" id="textfield" value=""/>
			<label class="log-lab">验证码</label>
			<div class="padding-bottom5"><img src="<?php echo C('domain.main');?>
/index.php?p=admin&m=login&a=captcha" id="img" width="220" height="80"></div>
			<input name="captcha" type="text" class="login-input" id="textfield" value=""/>
			<label class="log-lab"><input type="checkbox" name="rememberMe" class="uniform" value="yes"> 7天内自动登录</label>
            <input type="submit" id="button" value="登录" class="button"/>
       	  </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
document.getElementById('img').onclick = function (){ //给img标签绑定点击事件，当点击的时候，就换一张验证码
	//重新给img请求一次新的图片地址
	this.src = "<?php echo C('domain.main');?>
/index.php?p=admin&m=login&a=captcha&rn="+Math.random();
}
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
