<?php
/**
 * Created by PhpStorm.
 * User: Bu
 * Date: 2017/10/21
 * Time: 15:42
 */

namespace Admin\Controller;

use \Think\Controller;

class UpperController extends Controller
{

    public function webuploader()
    {


//        console . log($_FILES);
        file_put_contents('oo.log', print_r($_FILES, true));
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Public/admin/static/'; // 设置附件上传根目录
        $upload->savePath = '/Uploads/'; // 设置附件上传（子）目录


        // 上传文件
        $info = $upload->upload();
        if (!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功 获取上传文件信息
            foreach ($info as $file) {
//                global $path ;
//                $path = $file['savepath'] . $file['savename'];


                echo $file['savepath'] . $file['savename'];
            }
        }
    }


}