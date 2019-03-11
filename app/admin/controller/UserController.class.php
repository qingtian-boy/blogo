<?php

namespace admin\controller;  //创建了一个 全局空间   下的  admin空间   下的   controller空间
use \core\Controller; //引入   全局空间  下的  core空间  下的  Controller类

class UserController extends Controller{

    //编辑页和功能
    //http://www.blog33.com/index.php?p=admin&m=user&a=upd&id=xxx
    public function upd(){ 
        
        //接收GET方式传递的id值
        $id = $_GET['id'];

        //根据id值查询本条数据
        $sql = "select * from user where id={$id}";
        $model = M('UserModel');
        $user = $model->getRow($sql);

        //分配模板变量
        $this->assign('user', $user);

        //渲染模板
        $this->display('User/userEdit.html');
    }
    //http://www.blog33.com/index.php?p=admin&m=user&a=updh&id=xxx
    public function updh(){ 
        
        //接收GET方式传递的id值
        $id = $_GET['id'];

        //接收form表单传递的数据
        $acc = trim($_POST['acc']);//帐号
        $nickname = trim($_POST['nickname']);//昵称
        $type = trim($_POST['type']);//角色
        $pwd = trim($_POST['password']);//密码

        //处理头像图片上传
        if( $_FILES['headimg']['error']==0 ){//只有当error值为0时，表示上传的文件没有错误问题，才进行头像的重新上传
            $filePath = upFile($_FILES['headimg']);//调用上传文件函数重新上传一次头像
            if( !$filePath ){//如果文件上传失败
                echo '更新头像失败，请联系管理员同学哟~'; 
                $url = 'http://www.blog33.com/index.php?p=admin&m=user&a=upd&id='.$id;
                header('Refresh:3; url='.$url);
                exit;
            }
            
            $model = M('UserModel');
            $sql = 'select headimg from user where id=' . $id;
            $row = $model->getRow($sql);//查处旧的图片路径地址
            $oldFilePath = ROOT . $row['headimg'];//拼接旧的图片全路径地址
            unlink($oldFilePath);//删除旧的文件
        }
        
        //调用模型更新数据
        $sql = "update user set acc='{$acc}', nickname='{$nickname}', type='{$type}'";

        if( isset($filePath) ){//当$filePath存在时，表示新的头像上传成功
            $sql .= ", headimg='{$filePath}'";
        }

        if( $pwd!='' ){//当$pwd不等于空字符串时，表示密码需要更新
            $pwd = md5($pwd);
            $sql .= ", pwd='{$pwd}'";
        }

        $sql .= " where id={$id}";//最后拼接更新的条件

        $model = M('UserModel');
        $re = $model->setData($sql);

        //根据执行的结果进行判断
        if( $re ){//执行成功
            echo '修改成功！';
        }else{//执行失败
            echo '修改失败！'; 
        }

        $url = C('domain.main') . '/index.php?p=admin&m=user&a=upd&id=' . $id;
        header('Refresh:3; url='.$url);
        exit;
    }

    //删除功能相关
    public function del(){ 
        
        //接收GET传递的id值
        $id = $_GET['id'];

        //调用模型执行删除数据的SQL语句
        $sql = "delete from user where id={$id}";
        $model = M('UserModel');
        $re = $model->setData($sql);

        //根据执行的结果进行判断
        if( $re ){//删除成功
            echo '客官你好狠心哟～'; 
        }else{//删除失败
            echo '删不掉我，气死你～哇哇哇哇哇'; 
        }
        $url = C('domain.main') . '/index.php?p=admin&m=user&a=lis';
        header('Refresh:3; url='.$url);
        exit;

    }

    //列表页相关
    //http://www.blog33.com/index.php?p=admin&m=user&a=lis
    public function lis(){ 

        //调用模型查询数据
        $sql = 'select * from user where 1';
        $model = M('UserModel');
        $users = $model->getRows($sql);
        
        //分配模板变量
        $this->assign('users', $users);
        
        //渲染模板
        $this->display('User/userIndex.html');
    }


    //添加页相关
    //http://www.blog33.com/index.php?p=admin&m=user&a=ad
    public function ad(){ 
        
        //渲染模板
        $this->display('User/userAdd.html');
    }
    //http://www.blog33.com/index.php?p=admin&m=user&a=adh
    public function adh(){ //添加功能方法
        
        //接收表单数据
        $acc = trim($_POST['acc']);//帐号
        $pwd = md5(trim($_POST['password']));//密码  进行md5加密
        $nickname = trim($_POST['nickname']);//昵称
        $type = trim($_POST['type']);//角色
        $post_date = time();//添加时间

        //实现头像的上传
        $filePath = upFile($_FILES['headimg']);
        if( !$filePath ){//如果文件上传失败
            echo '您上传文件失败，请联系管理员同学哟~'; 
            $url = 'http://www.blog33.com/index.php?p=admin&m=user&a=ad';
            header('Refresh:3; url='.$url);
            exit;
        }

        //调用模型添加数据
        //$sql = "insert into user values (null, '{$acc}', '{$nickname}', '{$pwd}', '', {$post_date}, {$type})";
        $sql = "insert into user values (null, '{$acc}', '{$nickname}', '{$pwd}', '{$filePath}', {$post_date}, {$type})";
        $model = M('UserModel');
        $re = $model->setData($sql);

        //根据添加的结果进行判断
        if( $re ){//执行成功
            echo '你好棒棒哟～'; 
        }else{//执行失败
            echo '请联系管理员同学哟~'; 
        }
        $url = 'http://www.blog33.com/index.php?p=admin&m=user&a=ad';
        header('Refresh:3; url='.$url);
        exit;
    }
}