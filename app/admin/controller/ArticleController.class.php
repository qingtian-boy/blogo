<?php

namespace admin\controller;  //创建了一个 全局空间   下的  admin空间   下的   controller空间
use \core\Controller; //引入   全局空间  下的  core空间  下的  Controller类

class ArticleController extends Controller{

    //列表页相关
    //http://www.blog33.com/index.php?p=admin&m=article&a=lis
    public function lis(){ 

        //接收搜索表单域数据
        $s_title = isset($_REQUEST['s_title']) ? $_REQUEST['s_title'] : '';//搜索的标题
        $s_cat_id = isset($_REQUEST['s_cat_id']) ? $_REQUEST['s_cat_id'] : 0;//搜索的文章所属的分类id

        $this->assign('s_title', $s_title);
        $this->assign('s_cat_id', $s_cat_id);

        $condition = 1;//给定查询语句一个默认条件，默认恒为真

        if( $s_title!=='' ){//如果传递了搜索标题数据，则需要将标题数据作为查询条件来对待
            $condition .= " and title like '%{$s_title}%'";
        }
        if( !empty($s_cat_id) ){//如果传递了搜索所属分类id数据，则需要将所属分类id数据作为查询条件来对待
            $condition .= " and cat_id={$s_cat_id}";
        }

        //计算分页所需参数
        $nowPage = isset($_GET['page']) ? $_GET['page'] : 1;//当前页，如果传递了get方式的page名字参数，就使用这个参数的值作为当前页，如果没有这个参数，则默认当前页为第1页
        $numPerPage = 10;//每页显示的数据条数

        //$sql = 'select count(*) as num from article where 1';
        $sql = 'select count(*) as num from article where '.$condition;
        $row = M('ArticleModel')->getRow($sql);//查询数据表中数据的总条数
        $totalPage = (int)ceil($row['num']/$numPerPage);//计算分页的总页数

        //$url = C('domain.main') . "/index.php?p=admin&m=article&a=lis&page";//分页的跳转链接
        $url = C('domain.main') . "/index.php?p=admin&m=article&a=lis&s_title={$s_title}&s_cat_id={$s_cat_id}&page";//分页的跳转链接

        $pageHtml = pageHtml($nowPage, $totalPage, $url);//调用分页生成HTML代码函数，得到分页HTML部分
        $this->assign('pageHtml', $pageHtml);

        $M = ($nowPage-1)*$numPerPage;//计算偏移量

        //调用分类模型查询整理有序的分类数据
        $cats = M('CatModel')->getCats();
        $this->assign('cats', $cats);


        //调用模型查询数据
        //$sql = "select * from article where 1 order by pubtime desc limit 10";
        //$sql = "select * from article where 1 order by id desc limit {$M}, {$numPerPage}";
        $sql = "select * from article where {$condition} order by id desc limit {$M}, {$numPerPage}";

        $articles = M('ArticleModel')->getRows($sql);

        //分配模板变量
        $this->assign('articles', $articles);

        //渲染模板
        $this->display('Article/articleIndex.html');
    }

    //添加页相关
    //http://www.blog33.com/index.php?p=admin&m=article&a=ad
    public function ad(){ 
        
        //查询所有的文章分类数据
        $cats = M('CatModel')->getCats();

        //分配模板变量
        $this->assign('cats', $cats);

        //渲染模板
        $this->display('Article/articleAdd.html');
    }
    //http://www.blog33.com/index.php?p=admin&m=article&a=adh
    public function adh(){ 
        //接收表单数据
        $title = trim($_POST['title']);//文章标题
        $intro = htmlspecialchars(trim($_POST['intro']));//简介
        $content = htmlspecialchars(trim($_POST['content']));//内容
        $pubtime = time();//发布时间

        $cat = trim($_POST['cat']);//分类综合数据（包括分类id和分类名称）
        $cat_arr = explode('|', $cat);//将分类综合数据炸开成一个数组，数组下标为0的数据就是分类id，下标为1的数据就是分类名称
        $cat_id = $cat_arr[0];//获得分类id
        $cat_name = $cat_arr[1];//获得分类名称

        @session_start();
        $user_id = $_SESSION['admin']['id'];//添加者id
        $user_nickname = $_SESSION['admin']['nickname'];//添加者昵称

        //调用模型新增数据
        $sql = "insert into article values (null, '{$title}', '{$intro}', '{$content}', {$pubtime}, {$user_id}, '{$user_nickname}', 0, {$cat_id}, '{$cat_name}')";
        $re = M('ArticleModel')->setData($sql);

        //根据执行的结果进行判断
        if( $re ){//执行成功
            $this->jump('新增成功！', 'p=admin&m=article&a=ad');
        }else{//执行失败
            $this->jump('新增失败！', 'p=admin&m=article&a=ad');
        }
    }
}