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
                <h5>会员添加
                    <small>"*"代表必填选项,请认真填写</small>
                </h5>
            </div>
            <div class="ibox-content">
                <form method="post" class="form-horizontal" action="<?php echo U('upper/webuploader');?>" enctype="multipart/form-data" >

                    <div class="form-group">
                        <label class="col-sm-2 control-label">上传头像:</label>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary uploadBtn" type="submit">保存内容</button>
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
            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="/Public/admin/static/js/jquery.min.js?v=2.1.4"></script>
<script src="/Public/admin/static/js/bootstrap.min.js?v=3.3.6"></script>

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








<!-- Web Uploader -->
<script type="text/javascript">
    // 添加全局站点信息
    var BASE_URL = '/Public/admin/static/js/plugins/webuploader';
</script>
<script src="/Public/admin/static/js/plugins/webuploader/webuploader.min.js"></script>

<script src="/Public/admin/static/js/demo/webuploader-demo.js"></script>



</body>

</html>