<?php
/**
 * Created by PhpStorm.
 * User: Bu
 * Date: 2017/10/19
 * Time: 12:54
 */

namespace Admin\Controller;


use Boris\DumpInspector;
use Think\Controller;

class RegisterController extends Controller
{
    public function index(){
        //判断请求类型
        if (IS_POST){
        //判断提交的数据里是否有勾选同意协议
            if (!$_POST['check']){
        //如果没有弹出错误提示框
                $this ->error('请同意协议');
            }
        //接收传过来的数据
          $post = I('post.');
        //判断用户名是否存在,实例化模型
             $model = M('User');
        //组合查询条件
            $where = [];
            $where['username'] = $post['username'];
            $result = $model -> where($where) -> field('username') ->find();
            if ($result){
                $this -> error('用户已存在');
            }
        //判断两次输入的密码时候一致
            if($post['password1'] !== $post['password2']){
                $this ->error('两次输入密码不一致,请重新输入');
                die;
        //如果两次密码一致则把密码用MD5加密后存到数据里
            }else{
                $post['password'] = MD5($post['password1']);

            }
        // 实例化模型
            $model = M('user');
        //创建时间戳加入到数据里
            $post['registertime'] = time();
            //将数据写入数据库
            $result = $model -> add($post);
        //判断写入数据结果
            if($result){
                //成功
                $this -> success('成功',U('login/index'));
            }else{
                //失败
                $this -> error('失败');
            }

        }

        //载入视图
        $this ->display();


    }
}