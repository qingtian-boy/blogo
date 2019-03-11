<?php

namespace core;//创建了一个  全局空间  下的  core空间

class Controller extends \Smarty{

    //protected $smarty;

    public function __construct(){ 
        //解决父类构造方法被重写问题
        parent::__construct();

        //$this->smarty = new \Smarty;
        //$newPath = APP_ADMIN_PATH . 'view';//   mvc/app/admin/view
        $newPath = APP_PATH . $GLOBALS['plat'] . '/view';
        $this->setTemplateDir($newPath);//   设置查找后台模板文件的文件夹路径

        $newCompilePath = APP_PATH . $GLOBALS['plat'] . '/view_c';
        $this->setCompileDir($newCompilePath);//   设置存放编译缓存文件的目录路径

        //针对后台做登陆检查
        @session_start();      
        if( !isset($_SESSION['admin'])&&!($GLOBALS['plat']=='admin'&&$GLOBALS['module']=='Login')&&$GLOBALS['plat']!='home' ){//当session的admin数据不存在时，说明没有用户登陆或者用户登陆不成功
            

            //$this->jump('客官，请不要心急哟～翻墙是不好d哟');

            if( !isset($_COOKIE['rememberMe']) ){//没有7天免登录标识
                $this->jump('客官，请不要心急哟～翻墙是不好d哟');
            }else{//拥有7天免登录标识
                
                //重新根据用户id把用户信息查询回来
                $sql = 'select * from user where id=' . $_COOKIE['rememberMe'];
                $user = M('UserModel')->getRow($sql);
                $_SESSION['admin'] = $user;
            }
        }

    }

    //公共的刷新跳转方法
    /**
      *   PARAM      $msg     string      跳转前给出的提示信息，比如：$msg='添加失败，请联系管理员';
      *   PARAM      $urlParams     string      指定的p、m、a三个参数形成的字符串，比如跳转到登陆页：$urlParams='p=admin&m=login&a=login';
      *   PARAM      $time     string      停留展示提示信息的时间，比如要展示4秒提示信息：$time=4;
    */
    protected function jump($msg, $urlParams='p=admin&m=login&a=login', $time=3){ 
        echo $msg; 
        $url = C('domain.main') . '/index.php?' . $urlParams;
        header("Refresh:{$time}; url={$url}");
        exit;
    }
}