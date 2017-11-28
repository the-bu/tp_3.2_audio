<?php
/**
 * Created by PhpStorm.
 * User: Bu
 * Date: 2017/11/27
 * Time: 21:21
 */

namespace Admin\Controller;


use \Think\Controller;
class InterfacesController extends Controller
{
    public  function  username(){
        if (IS_AJAX)
        {
//            $post = ;

            $model = M('user');//实例化用户表模型

            $where = [];//组合查询条件

            $where['username'] = $_POST['username'];
//            print_r($where);die;
            $result = $model->where($where)->field('username')->find();

            if($result)
            {
                $this->ajaxReturn(1);
            }else
            {
                $this->ajaxReturn(0);
            }
        }
    }
}