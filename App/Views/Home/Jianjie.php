<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="高效优雅的PHP微型框架">
    <meta name="author" content="Shampeak">
    <title>GraceEasy 高效优雅的PHP微型框架</title>
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="/assets/css/docs.min.css" rel="stylesheet">
    <link href="/assets/css/U.css" type="text/css" rel="stylesheet"/>

    <!-- SyntaxHighlighter -->
    <script type="text/javascript" src="/assets/SyntaxHighlighter/scripts/shCore.js"></script>
    <script type="text/javascript" src="/assets/SyntaxHighlighter/scripts/shBrushPhp.js"></script>
    <link type="text/css" rel="stylesheet" href="/assets/SyntaxHighlighter/styles/shCoreEmacs.css"/>
    <script type="text/javascript">
        SyntaxHighlighter.defaults['toolbar'] = false;
        SyntaxHighlighter.all();
    </script>
    <!-- /SyntaxHighlighter -->

</head>

<body>

<?php include Config('Router')['View_Folder']."Public/Nav.php"; ?>


<div class="container" id="cbody">



    <div class="row">
        <div class="col-sm-3 blog-sidebar">
            <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm  sidebar-module-inset" role="complementary" style="padding-top: 50px;">
                <ul class="nav bs-sidenav">
                    <li>
                        <a href="#s1">GraceEasy简介</a>
                    </li>
                    <li>
                        <a href="#tedian">特点</a>
                    </li>
                    <li>
                        <a href="#s2">目录结构</a>
                    </li>
                    <li>
                        <a href="#s3">下载和安装</a>
                    </li>
                    <li>
                        <a href="#s5">Hello World</a>
                    </li>
                </ul>
                <!--  -->
                <a class="back-to-top" href="#top">
                    返回顶部
                </a>
            </div>

            <!-- div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div -->
            <!-- div class="sidebar-module">
                <h4>相关</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div -->
        </div><!-- /.blog-sidebar -->

        <div class="col-sm-8 blog-main">

            <div class="blog-header">
                <ol class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="active">简介</li>
                </ol>

                <h3 class="blog-title">GraceEasy</h3 class="blog-title">
                <p class="lead blog-description">极简的敏捷框架.</p>
            </div>

            <div class="blog-post" id="s1">
                <h2>简介</h2>
                <hr>
                <p>　　GraceEasy是一个微型的PHP敏捷框架，适用于简单系统的快速开发，提供了简单的路由方式，采用原生PHP语法来渲染页面,简单且实用。
                </p>
                <p>　　目前GraceEasy由<code>Shampeak</code>开发维护，如果你希望参与到此项目中来，可以到Github上Fork项目并提交Pull Request!
                </p>
                <hr>
            </div><!-- /.blog-post -->

            <div class="blog-post" id="tedian">
                <h2>特点</h2>
                <hr>
                <p>

                    <li>简单的API
                    <li><a href="https://tools.ietf.org/html/rfc3986" target="_blank">RFC3986</a> 编码规范
                    <li> <a href="https://github.com/shampeak" target="_blank">全文档</a>支持
                    <li>组件框架无关[组件可以分离出来单独使用,有独立的文档和测试代码支持]；
                    <li> <a href="https://getcomposer.org" target="_blank">Composer</a>支持
                    <li>遵循<a href="http://www.php-fig.org/psr/psr-2/" target="_blank">PSR-2</a>和<a href="http://www.php-fig.org/psr/psr-4/" target="_blank">PSR-4</a>规范
                    <li>单元测试
                <li>轻量级框架


                </p>
<hr>

                <h3>作者</h3>
<p>
                GracePHP由<code>Shampeak</code>独立研发
</p>
                <hr>
                <h3>协议</h3>
                <p>
                本框架支持MIT开源协议,更多信息请参考<a target="_blank" href="https://github.com/shampeak/GraceEasy/blob/master/LICENSE.md">License File.</a>
                </p>
                <hr>
            </div><!-- /.blog-post -->

            <!-- 目录结构 -->
            <div class="blog-post"  id="s2">
                <h2>目录结构</h2>
                <hr>
<pre>
GraceEasy
    ├── App                                 #业务代码文件夹，可在配置中指定路径
    │   ├── Cache                           #缓存文件夹
    │   │   └── Log                         #日志文件夹，需要写权限
    │   │   └── tmp                         #临时缓存文件
    │   │   └── Slowquery                   #数据库慢查询日志
    │   ├── Error                           #中断操作的模板文件夹
    │   ├── Traits                          #部件
    │   ├── Libary                          #外部库文件夹
    │   ├── Model                           #模型文件夹
    │   ├── Controller                      #控制器文件夹
    │   │   └── Home                        #对应Home控制器文件夹
    │   │        └── Home.php               #控制器
    │   │        └── BaseController.php     #控制器的父类
    │   └── Views                           #视图文件夹
    │        ├── Index                      #对应Index控制器
    │        │   └── Index.php
    │        └── Public                     #公用模板
    │           ├── footer.php
    │           └── header.php
    ├── Grace                               #Grace 框架的核心文件
    │   └── Config                          #配置文件夹
    │   │   └── Config.php                  #全局配置文件
    │   └── Router.php                      #核心文件 路由
    │   └── Input.php                       #核心文件 数据获取
    │   └── Helper.php                      #核心文件 封装函数
    │   └── Grace.php                       #核心文件
    │   └── Controller.php                  #核心文件 控制器
    │   └── View.php                        #核心文件 视图
    │   └── Bootstrap.php                   #核心文件 启动
    └── wwwroot                             #发布目录
    │   ├── assets                          #前端资源文件夹
    │   └── Index.php                       #入口文件
    └── vendor                              #Composer文件夹
</pre>

            </div><!-- /.blog-post -->

            <div class="blog-post" id="s3">
                <h2>下载和安装</h2>
                <hr>
                <h3>1 : 通过压缩包安装</h3>
                <p>
                    　　可以通过github直接下载压缩好的代码文件。
                    当然也可以通过git直接clone项目,master分支为稳定版本，develop分支为开发版本，可能会有一些实验性的功能。
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="https://github.com/shampeak/GraceEasy">下载 稳定版</a>
                </p>


            </div><!-- /.blog-post -->


            <div class="blog-post" id="s5">
                <h2>Hello World</h2>

                <hr>
                <h3>第一步 : 部署</h3>
                <p>
                    拷贝文件到本地; 发布目录是 \wwwroot
                </p>

                <h3>第二步 : </h3>
                <p>
                    在App\Controller\Home目录下创建文件Home.php
                </p>

                <h3>第三步 : </h3>
                <p>
                    编写控制器 文件Home.php内容如下:
                </p>
<pre  class="brush: php;">
namespace App\Controller\Home;

class Home {

    //构造方法
    public function __construct(){
    }

    //方法
    public function doIndex(){
        echo 'Hello World';
    }
}
</pre>

                <h3>第四步 : </h3>
                <p>
                    在浏览器输入如下地址 : http://localhost/ 输出结果如下
                </p>
<pre>
Hello World!
</pre>

                <hr>

            </div><!-- /.blog-post -->



            <hr>
        </div><!-- /.blog-main -->


    </div><!-- /.row -->

</div><!-- /.container -->


<?php include Config('Router')['View_Folder']."Public/Footer.php"; ?>


<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="/assets/js/holder.min.js"></script>
<script src="/assets/js/docs.min.js"></script>



</body>
</html>
