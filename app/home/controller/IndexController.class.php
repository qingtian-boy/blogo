<?php

namespace home\controller;
use \core\Controller;

class IndexController extends Controller{

    //评论相关
    public function pub(){ 
        //接收表单数据
        $content = trim($_POST['content']);//评论的内容
        $post_date = time();//发布评论的时间
        $article_id = trim($_GET['article_id']);//评论文章的id
        $article_title = trim($_GET['article_title']);////评论文章的标题

        @session_start();
        $user_id = $_SESSION['home']['id'];//评论人的id
        $user_nickname = $_SESSION['home']['nickname'];//评论人的昵称

        //调用模型新增评论数据
        $sql = "insert into comment values (null, '{$content}', {$post_date}, {$article_id}, '{$article_title}', {$user_id}, '{$user_nickname}')";
        $re = M('CommentModel')->setData($sql);

        //根据执行的结果进行判断处理
        if( $re ){//执行成功
            //调用文章表模型将本篇文章的评论总数+1
            $sql = "update article set comment_num=comment_num+1 where id={$article_id}";
            M('ArticleModel')->setData($sql);

            $this->jump('评论成功！', "p=home&m=index&a=info&id={$article_id}");
        }else{//执行失败
            $this->jump('评论失败！', "p=home&m=index&a=info&id={$article_id}");
        }
    }

    //详情页相关
    public function info(){ 
        
        //接收get传递的id值
        $id = $_GET['id'];

        //根据id值查询回显的数据
        $sql = "select * from article where id={$id}";
        $article = M('ArticleModel')->getRow($sql);

        //查询本篇文章所有的评论
        $sql = "select * from comment where article_id={$id} order by post_date";
        $comments = M('CommentModel')->getRows($sql);

        //分类模板变量
        $this->assign('article', $article);
        $this->assign('comments', $comments);

        //渲染详情页模板
        $this->display('blogShow.html');

    }

    //退出相关
    public function logout(){ 
        
        @session_start();
        unset($_SESSION['home']);

        $this->jump('客官你怎么忍心抛下俺呐～', 'p=home&m=index&a=index');
    }

    //登陆相关
    public function login(){ 
        
        //接收表单数据
        $acc = trim($_POST['acc']);//帐号
        $pwd = md5(trim($_POST['pwd']));//密码

        //检查帐号密码
        $sql = "select * from user where acc='{$acc}' and type=0";
        $user = M('UserModel')->getRow($sql);

        //根据检查的结果作出判断处理
        if( !empty($user)&&$user['pwd']==$pwd ){//如果$user存在实际数据并且查询得到的密码和用户填写的密码相等时，表示帐号和密码填写都正确
        
            @session_start();
            $_SESSION['home'] = $user;//记录下前台登陆成功的用户信息

            $this->jump('欢迎您来小店光顾哟～', 'p=home&m=index&a=index');
        }else{//登陆失败
            $this->jump('帐号或密码填写不正确哟～', 'p=home&m=index&a=index');
        }
    }

    //注册相关
    public function register(){ 
        
        //接收表单数据
        $acc = trim($_POST['acc']);//帐号
        $nickname = trim($_POST['nickname']);//昵称
        $pwd = md5(trim($_POST['pwd']));//密码
        $post_date = time();//注册时间

        //调用模型新增用户
        $sql = "insert into user (acc, nickname, pwd, post_date) values ('{$acc}', '{$nickname}', '{$pwd}', {$post_date})";
        $re = M('UserModel')->setData($sql);

        //根据执行的结果进行判断处理
        if( $re ){//执行成功
            $this->jump('恭喜您入坑成功！～', 'p=home&m=index&a=index');
        }else{//执行失败
            $this->jump('注册失败，请联系管理员MM哟～', 'p=home&m=index&a=index');
        }
    }

    //前台首页相关
    //http://www.blog33.com/index.php?p=home&m=index&a=index
    public function index(){ 
        
        //调用模型查询需要展示的数据
        $sql = "select * from article where 1 order by pubtime desc limit 10";
        $articles = M('ArticleModel')->getRows($sql);

        //调用分类模型查询整理有序的所有分类数据
        $cats = M('CatModel')->getCats();

        //分配模板变量
        $this->assign('articles', $articles);
        $this->assign('cats', $cats);

        //渲染模板
        $this->display('blogShowList.html');
    }
}