<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - 联系人</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/admin/static/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/admin/static/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/Public/admin/static/css/animate.css" rel="stylesheet">
    <link href="/Public/admin/static/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-4">
                <div class="contact-box">

                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="/Public/admin/static<?php echo ($vo["file_pic"]); ?>">
                                <div class="m-t-xs font-bold">营销总监</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong> <?php echo ($vo["username"]); ?></strong></h3>
                            <p><i class="fa fa-map-marker"></i><?php echo ($vo["address"]); ?></p>
                            <address>
                            <strong><?php echo ($vo["name"]); ?></strong><br>
                            E-mail:<?php echo ($vo["email"]); ?><br>
                            Weibo:<a href="">http://weibo.com/xxx</a><br>
                            <abbr title="Phone">Tel:</abbr> <?php echo ($vo["tel"]); ?>
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>

                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/Public/admin/static/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/admin/static/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- 自定义js -->
    <script src="/Public/admin/static/js/content.js?v=1.0.0"></script>



    <script>
        $(document).ready(function () {
            $('.contact-box').each(function () {
                animationHover(this, 'pulse');
            });
        });
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>