<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    /***
     * 展示登录页面
     */
    public function index(){

        //视图输出
        $this ->display();
//        $str = $this->feach();
//        echo $str;

    }
    public function login(){
        //判断请求类型
        if(IS_POST) {
            //接收数据
            $post = I('post.');
            //实例化模型
            $model = M('User');
            //将查村条件存入$where里
            $where = [];
            $where['username'] = $post['username'];
            //利用条件查询
            $result = $model->where($where)->field('username,password')->find();
            //判断用户名不一样的时候弹出提示
            if ($post['username'] !== $result['username']) {
                $this -> error('用户名错误');
                //判断密码不一样的时候弹出提示
            } elseif (md5($post['password']) !== $result['password']) {
                $this -> error('密码错误,重新输入');
                //如果密码和用户名都匹配成功,将信息存入session,弹出消息并跳转页面
            }elseif ($post['username'] == $result['username'] || $post['password'] !== $result['password']){
                session('u_id',$result['u_id']);
                session('username',$result['username']);
                $this ->success('登陆成功',U('index/index'));
            }
        }
    }
    public function loginout(){
        session('username',null); // 删除name
        session('u_id',null); // 删除id
//        redirect(U('Login/index'), 2, '正在退出登录...');
        $this -> error('正在退出...',U('Login/index'),3);
    }
}