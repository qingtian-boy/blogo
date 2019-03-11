<?php

namespace model;//创建了一个  全局空间  下的  model空间
use \core\Model;//引入 全局空间  下的  core空间  下的  Model类

class CatModel extends Model{

    public function getCats(){ 
        $sql = 'select * from cat where 1';//构建查询所有分类数据的SQL语句
        $cats = $this->getRows($sql);//调用获取多条数据的方法一次性得到全部的分类数据

        $tree_out = [];//构建一个保存整理有序分类数据的数组变量，当前是一个空数组
        $this->recursiveCat($tree_out, $cats);//调用无限级递归分类方法，将查的的所有分类数据进行整理

        return $tree_out;//将整理有序的分类数据作为返回值返回出去
    }

    //无限级递归分类
    /**
     * PARAM      $tree_in        array           该参数是引用传递，表示存放整理有序的分类数据的数组
     * PARAM      $cats            array            表示所有的分类数据形成的二维数组
     * PARAM      $parent_id    int                查询当前分类的子分类的parent_id条件，比如默认值为0表示查询的是所有的一级分类
     * PARAM      $space          int                表示缩进的个数，比如一级分类缩进为0个，二级分类缩进为1个
    */
    private function recursiveCat(&$tree_in, $cats, $parent_id=0, $space=0){ 

        foreach( $cats as $cats_val1 ){ //从所有分类中找
            
            if( $cats_val1['parent_id']==$parent_id ){//如果当前分类的parent_id值等于0，则说明这个分类一定是一级分类
            
                $cats_val1['space'] = $space;//增加一个表示缩进的数组元素
                $tree_in[] = $cats_val1;//只要是一级分类就将这个分类放到$tree_in里面去

                //递归调用自己去找当前查得的这个分类的子分类
                $this->recursiveCat($tree_in, $cats, $cats_val1['id'], $space+1);
                //foreach( $cats as $cats_val2 ){ //还是从所有分类中去找
                    
                    //if( $cats_val2['parent_id']==$cats_val1['id'] ){//如果当前分类的parent_id值等于某个一级分类的id，则说明当前这个分类属于这个一级分类的二级分类
                    
                        //$tree_in[] = $cats_val2;//只要是二级分类就将这个分类放到$tree_in里面去

                        //foreach( $cats as $cats_val3 ){ 
                            
                            //if( $cats_val3['parent_id']==$cats_val2['id'] ){
                                //$tree_in[] = $cats_val3;
                            //}
                        //}
                    //}
                //}
            }
        }
    }
}