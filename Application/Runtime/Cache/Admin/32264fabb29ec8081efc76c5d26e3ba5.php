<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 基本表单</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="/Public/admin/static/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/admin/static/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/admin/static/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/Public/admin/static/css/animate.css" rel="stylesheet">
    <link href="/Public/admin/static/css/style.css?v=4.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/css/plugins/webuploader/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/Public/admin/static/css/demo/webuploader-demo.css">
</head>

<body class="gray-bg">
<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>音频添加
                    <small>"*"代表必填选项,请认真填写</small>
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="form_basic.html#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="form_basic.html#">选项1</a>
                        </li>
                        <li><a href="form_basic.html#">选项2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">

                <form method="post" class="form-horizontal" action="<?php echo U('audio/add');?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" >主播名:</label>

                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" >音频名称:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" >简介</label>

                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="eintroduce">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">点击次数:</label>

                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="click">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">是否推荐:</label>

                        <div class="checkbox i-checks">
                            <label class="">
                                <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                <i></i>
                            </label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">是否热门:</label>

                        <div class="checkbox i-checks">
                            <label class="">
                                <div class="icheckbox_square-green" style="position: relative;"><input type="checkbox" value="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                <i></i>
                            </label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">上传封面:</label>
                        <div class="col-sm-10">
                            <div class="ibox float-e-margins">
                                <div class="ibox-content">
                                    <div class="page-container">
                                        <p>您可以尝试文件拖拽，使用QQ截屏工具，然后激活窗口后粘贴，或者点击添加图片按钮，来体验此demo.</p>
                                        <div id="uploader" class="wu-example">
                                            <div class="queueList">
                                                <div id="dndArea" class="placeholder">
                                                    <div id="filePicker"></div>
                                                    <p>或将照片拖到这里，单次最多可选300张</p>
                                                </div>
                                            </div>
                                            <div class="statusBar" style="display:none;">
                                                <div class="progress">
                                                    <span class="text">0%</span>
                                                    <span class="percentage"></span>
                                                </div>
                                                <div class="info"></div>
                                                <div class="btns">
                                                    <div id="filePicker2"></div>
                                                    <div class="uploadBtn">开始上传</div>
                                                </div>
                                            </div>
                                            <input type="text" name="file_pic" value="" hidden>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">保存内容</button>
                        <button class="btn btn-white" type="submit">取消</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 b-r">
                        <h3 class="m-t-none m-b">登录</h3>

                        <p>欢迎登录本站(⊙o⊙)</p>

                        <form role="form">
                            <div class="form-group">
                                <label>用户名：</label>
                                <input type="email" placeholder="请输入用户名" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>密码：</label>
                                <input type="password" placeholder="请输入密码" class="form-control">
                            </div>
                            <div>
                                <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit">
                                    <strong>登录</strong>
                                </button>
                                <label>
                                    <input type="checkbox" class="i-checks">自动登录</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4>还不是会员？</h4>
                        <p>您可以注册一个账户</p>
                        <p class="text-center">
                            <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="/Public/admin/static/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/admin/static/js/bootstrap.min.js?v=3.3.6"></script>

<script src="/Public/admin/static/js/plugins/webuploader/webuploader.min.js"></script>

<script src="/Public/admin/static/js/demo/webuploader-demo.js"></script>

<!-- 自定义js -->
<script src="/Public/admin/static/js/content.js?v=1.0.0"></script>

<!-- iCheck -->
<script src="/Public/admin/static/js/plugins/iCheck/icheck.min.js"></script>


<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });


    });
</script>
<!-- layerDate plugin javascript -->
<script src="/Public/admin/static/js/plugins/layer/laydate/laydate.js"></script>
<script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });

    //日期范围限制
    var start = {
        elem: '#start',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(), //设定最小日期为当前日期
        max: '2099-06-16 23:59:59', //最大日期
        istime: true,
        istoday: false,
        choose: function (datas) {
            end.min = datas; //开始日选好后，重置结束日的最小日期
            end.start = datas //将结束日的初始值设定为开始日
        }
    };
    var end = {
        elem: '#end',
        format: 'YYYY/MM/DD hh:mm:ss',
        min: laydate.now(),
        max: '2099-06-16 23:59:59',
        istime: true,
        istoday: false,
        choose: function (datas) {
            start.max = datas; //结束日选好后，重置开始日的最大日期
        }
    };
    laydate(start);
    laydate(end);
</script>






<!-- Web Uploader -->
<script type="text/javascript">
    // 添加全局站点信息
    var BASE_URL = '/Public/admin/static/js/plugins/webuploader';
</script>


<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
<!--统计代码，可删除-->

</body>

</html>