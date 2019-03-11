<?php

namespace admin\controller;  //创建了一个 全局空间   下的  admin空间   下的   controller空间
use \core\Controller; //引入   全局空间  下的  core空间  下的  Controller类

class CatController extends Controller{

    //删除相关
    //http://www.blog33.com/index.php?p=admin&m=cat&a=del&id=xxxx
    public function del(){ 
        //接收分类id
        $id = $_GET['id'];

        //检查当前这个分类是否还有子分类
        $sql = "select count(*) as num from cat where parent_id={$id}";
        $row = M('CatModel')->getRow($sql);//查询当前分类的子分类数量
        if( $row['num']!=0 ){//只要当前分类的子分类数量不等于0，则说明一定存在子分类，那么就跳回去给出相应的提示
            $this->jump('当前分类存在子分类，请先将所有该分类的子分类删除之后，再来删除本条分类！', 'p=admin&m=cat&a=lis');
        }

        //检查当前这个分类是否有关联的文章

        //根据分类id调用模型删除数据
        $sql = "delete from cat where id={$id}";
        $re = M('CatModel')->setData($sql);

        //根据执行的结果进行判断处理
        if( $re ){//删除成功
            $this->jump('删除成功！', 'p=admin&m=cat&a=lis');
        }else{//删除失败
            $this->jump('删除失败！', 'p=admin&m=cat&a=lis');
        }
    }

    //添加页相关
    //http://www.blog33.com/index.php?p=admin&m=cat&a=ad
    public function ad(){ 
        
        //调用模型查询整理有序的所有分类数据
        $cats = M('CatModel')->getCats();

        //分配模板变量
        $this->assign('cats', $cats);

        //渲染模板
        $this->display('Category/categoryAdd.html');
    }
    public function adh(){ 
        
        //接收表单数据
        $name = $_POST['name'];//新分类的名称
        $parent_id = $_POST['parent_id'];//新分类的父分类id

        @session_start();
        $user_id = $_SESSION['admin']['id'];//当前添加者的id值
        $user_nickname = $_SESSION['admin']['nickname'];//当前添加者的用户昵称

        //调用模型新增数据
        $sql = "insert into cat values (null, '{$name}', {$parent_id}, {$user_id}, '{$user_nickname}')";
        $re = M('CatModel')->setData($sql);

        //根据新增的结果进行判断处理
        if( $re ){//执行成功
            $this->jump('客官你好棒棒哟！～', 'p=admin&m=cat&a=lis', 2);
        }else{//执行失败
            $this->jump('客官还不行哟，请先联系管理员哦！～', 'p=admin&m=cat&a=ad', 2);
        }
    }

    //列表页相关
    //http://www.blog33.com/index.php?p=admin&m=cat&a=lis
    public function lis(){ 
        //调用模型查询所有的分类数据
        //$model = M('CatModel');
        //$sql = 'select * from cat where 1';
        //$cats = $model->getRows($sql);

        $cats = M('CatModel')->getCats();

        //分配模板变量
        $this->assign('cats', $cats);

        //渲染模板
        $this->display('Category/categoryIndex.html');
    }

    

}