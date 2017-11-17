<?php
/**
 * Created by PhpStorm.
 * User: Bu
 * Date: 2017/10/20
 * Time: 12:47
 */

namespace Admin\Controller;


use Think\Image;

class UserController extends CommonConterller {
    /***
     * 会员列表
     */
    public function index(){

        //实例化模型
        $model = M('User');
        //查询所有数据
        $data = $model ->select();
        //分辨数据
        $this->assign('data',$data);


        //载入视图
        $this-> display();
    }
    /**
     * 会员添加
     */
    public function add(){

        //判断提交方式
        if (IS_POST){
//            dump($_POST);die;
            $post = I('post.');
//            dump($post);die;
            //实例化模型
            $model = M('User');
            //将密码加密
            if ($post['password']){
                $post['password'] = md5($post['password']);
            }
            //创建时间戳
            $post['registertime'] = time();
            //加入数据库
            $result = $model -> add($post);
            if ($result){
                $this -> success('添加成功');
            }else{
                $this -> error('添加失败');
            }
        }


        //引入视图
        $this -> display();
    }
    /***
     * 会员编辑
     */
    public function edit(){
        //判断提交方式
        if (IS_POST){
            //接收post提交的数据
            $post = I('POST.');
            //实例化模型
            $model = M('User');
            //添加到数据库
            $result = $model -> where('username'== $post['username']) ->  save($post);
            if ($result){
                $this -> success('修改成功');
            }else{
                $this -> error('修改失败');
            }
        }

        //实例化模型
        $model = M('User');
        //获得到会员的id
        $u_id =  session('usename');
//        dump($u_id);die;
        //查询数据库
        $data = $model -> where('u_id'== $u_id) -> find();
        //分配数据
//        dump($data);
        $this->assign('data',$data);

        $this ->display();
    }
}