<?php
/**
 * Created by PhpStorm.
 * User: Bu
 * Date: 2017/10/20
 * Time: 12:02
 */

namespace Admin\Controller;


use Think\Controller;

class CommonConterller extends Controller
{
        //设置构造方法中间件, 每次进入页面都检查session值是否存在, 如果不存在旧调回登录页面
        public  function _initialize()
        {
            if (!session('username')){
                $this -> error('请登录',U('login/index'),3);
            }
            //实例化模型给需要经常查数据库的操作一个中间件
            $model = M('User');
            //组建查询条件
            $username = session('username');
            $data = $model -> where('username' ==$username) ->find();
            $this ->assign('data',$data);
        }
//        public  function __construct()
//        {
//            //构造父类
//            parent::__construct();
//            if (!session('username')){
//                $this -> error('请登录',U('login/index'),3);
//            }
//        }
}