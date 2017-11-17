TYNIINT

# 开发tp3.2后台开发文档

1.配置服务器, 更改域名;

2.建控制器,引入登陆、注册视图,设置常量,加载静态资源

4.配置数据库

在D:\WWW\tp3.2\ThinkPHP\Conf\convention.php里

```
 /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'tp3.2',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
```



5.建立项目数据库

user(用户表)



|     字段名      |     类型      |                 |             |          | 默认值  | 说明    |
| :----------: | :---------: | :-------------: | :---------: | :------: | :--: | ----- |
|   username   |  char(20)   |                 |             |          |      | 用户名   |
|   password   |  char(32)   |                 |             |          |      | 密码    |
|     tel      | tinyint(11) |                 |             |          |      | 电话    |
|   address    |  char(50)   |                 |             |          |      | 地址    |
|    email     |  char(30)   |                 |             |          |      | 邮箱    |
| registertime |   INT(20)   | (为什么不能用tinyint) |             |          |      | 注册时间  |
|     u_id     |     int     | auto_increment  | primary key | not null |      | id    |
|     name     |  char(20)   |                 |             |          |      | 昵称    |
|     g_id     |     int     |                 |             |          |      | 用户组id |

```
CREATE TABLE USER (
u_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
password CHAR ( 32 ) NOT NULL,
tel TINYINT ( 11 ) NOT NULL,
address CHAR ( 50 ),
email CHAR ( 50 ),
registertime TINYINT ( 20 ),
name CHAR ( 20 ),
g_id TINYINT ( 10 ) 
)

```

6.写好登陆注册

7.设置登陆钩子,没如果没有登陆就不能进入后台

__construct()是php内置构造方法

_initialize() think封装的方法

```php 
//区别
__construct()不能继承父类的方法, 需要构造父类, 而_initialize() 则不需要
//实例:
class CommonConterller extends Controller
{
        public  function _initialize()
        {
            if (!session('username')){
                $this -> error('请登录',U('login/index'),3);
            }
        }
//  ****************************************************************************
        public  function __construct()
        {
            //构造父类
            parent::__construct();
            if (!session('username')){
                $this -> error('请登录',U('login/index'),3);
            }
        }
}
```

8.添加会员管理功能

1.会员列表

php

```php
lass UserController extends CommonConterller {
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


}
```

模版输出信息

```html
<volist name="data" id="vo">
            <div class="col-sm-4">
                <div class="contact-box">

                    <a href="profile.html">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="__ADMIN__/img/a1.jpg">
                                <div class="m-t-xs font-bold">营销总监</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong> {$vo.username}</strong></h3>
                            <p><i class="fa fa-map-marker"></i> 四川·成都</p>
                            <address>
                            <strong>Taobao, Inc.</strong><br>
                            E-mail:xxx@taobao.com<br>
                            Weibo:<a href="">http://weibo.com/xxx</a><br>
                            <abbr title="Phone">Tel:</abbr> (123) 456-7890
                        </address>
                        </div>
                        <div class="clearfix"></div>
                    </a>

                </div>
            </div>
            </volist>
```

9.上传图片调用的webupload 

①因为把webupload放在表单里提交拿到参数,所以必须在表单里设置一个隐藏域`<input type=text hiden value='' class='file_photo'>`,然后改动webupload.demo.js里面`server:请求的方法接口地址`然后在方法接口里拼接上传文件的地址,最后`return`或`echo`出来,这样就会返回出数据, 在浏览器的`NETWORK`里面点`XHR`查看每次ajax请求数据的`respons`来查看每次返回的数据, 不过webupload这时候是没法接受到返回来的数据的, 还需要在demo.js里加上一条方法

``` javascript
uploader.on('uploadSuccess', function (file, response) {
    var imgurl = response.url; //上传图片的路径
   $("input[name='filePath']").val(imgurl);//将接受到的数据放入到隐藏域里
    alert(imgurl);
});
```

这样才可以获得图片的路径,最后将数据追加到隐藏域里面,通过submit提交就可以拿到图片上传的路径了.

②如果文件不通过form表单上传,那么在后台方法里就可以直接难道数据地址, 因为是通过ajax提交的

10.制作会员编辑页面,需要注意的是:

find()查询的数据是个一维数组所以循环数据的时候用

```
<volist name=data id='vo'>
{$data.username}
</volist>
```

select()返回的是一个二维数据,需要遍历

```
<volist name=data id='vo'>
{$vo.username}
</volist>
```

11.无法加载控制器的原因,多数在于控制器的名字写错了

12创建添加音频表

| 字段名                |      |      |      |
| ------------------ | ---- | ---- | ---- |
| aid                |      |      |      |
| title              |      |      |      |
| introduce(介绍)      |      |      |      |
| click              |      |      |      |
| fid(对应文件表fid)      |      |      |      |
| create_time        |      |      |      |
| upper_time         |      |      |      |
| pic                |      |      |      |
| uid(对应用户表uid)      |      |      |      |
| is_hot             |      |      |      |
| is_recommend(是否推荐) |      |      |      |
| tag(标签)            |      |      |      |
|                    |      |      |      |
|                    |      |      |      |

