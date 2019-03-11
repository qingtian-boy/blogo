<?php

namespace admin\controller;  //创建了一个 全局空间   下的  admin空间   下的   controller空间
use \core\Controller; //引入   全局空间  下的  core空间  下的  Controller类

class LoginController extends Controller{

    //退出功能
    public function logout(){ 
        
        @session_start();
        unset($_SESSION['admin']);//清掉登陆成功时记录下的SESSION信息

        $this->jump('客官，您要常来哟～');//给出提示并且跳回登陆页
    }

    //展示登陆模板页面
    //http://www.blog33.com/index.php?p=admin&m=login&a=login
    public function login(){ 
        
        //渲染模板
        $this->display('Privilege/login.html');
    }
    //展示验证码
    //http://www.blog33.com/index.php?p=admin&m=login&a=captcha
    public function captcha(){ 
        
        $catpchaTool = M('CaptchaTool');//创建一个CaptchaTool工具类的对象
        //$catpchaTool->writeStr();//调用写字方法向画布上写字
        $str = $catpchaTool->writeStr();
        @session_start();//开启SESSION机制
        $_SESSION['captcha'] = $str;//将本次生成的验证码文字记录下来，以供后续的请求调用匹配
        $catpchaTool->setPoint();//调用设置干扰点的方法向画布上设置干扰点
        $catpchaTool->setLine();//调用设置干扰线的方法向画布上设置干扰线
        $catpchaTool->output();//将图像直接输出到浏览器
    }
    //处理登陆的功能
    public function loginh(){ 
        
        //接收表单提交的数据
        $acc = trim($_POST['acc']);//帐号
        $pwd = md5(trim($_POST['password']));//密码
        $captcha = trim($_POST['captcha']);//验证码
        $rememberMe = isset($_POST['rememberMe']) ? trim($_POST['rememberMe']) : 'no';//7天免登录标识，如果值为yes表示勾选了这个按钮

        //检查验证码的正确性
        @session_start();
        //if( $_SESSION['captcha']!=$captcha ){//如果系统生成的验证码和用户填写的验证码不相等，说明用户填写错了
            //$this->jump('您填写的验证码有误，请重新填写！');
        //}

        //检查帐号密码的正确性
        //$sql = "select * from user where acc='{$acc}' and pwd='{$pwd}' and type=1";
        $sql = "select * from user where acc='{$acc}' and type=1";
        //echo $sql;
        //exit;
        $model = M('UserModel');
        $user = $model->getRow($sql);

        //根据最终检查的结果执行判断处理
        if( !empty($user) && $user['pwd']==$pwd ){//说明帐号和密码正确，能够查得一条存在的数据
            
            $_SESSION['admin'] = $user;//当登陆成功时，记录下登陆成功者的所有用户信息

            if( $rememberMe=='yes' ){//表示勾选了7天免登录按钮
                setcookie('rememberMe', $user['id'], time()+7*24*3600);//设置一个免登录标识，有效期为7天
            }

            $this->jump('客官，欢迎您登陆本平台哟～！', 'p=admin&m=article&a=lis');
        }else{//否则说明帐号或密码错误了
            $this->jump('您填写的帐号或密码不正确！');
        }
    }
}

