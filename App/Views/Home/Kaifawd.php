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
                <!--ul class="nav bs-sidenav">
                    <li>
                        <a href="#s1">GraceEasy简介</a>
                    </li>
                    <li>
                        <a href="#s2">目录结构</a>
                    </li>
                    <li>
                        <a href="#s3">下载</a>
                    </li>
                    <li>
                        <a href="#s4">安装</a>
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
                    <li class="active">开发文档</li>
                </ol>
                <h3 class="blog-title">开发文档</h3>
                <p class="lead blog-description">面向更底层二次开发的开发者.</p>
            </div>

            <div class="blog-post"  id="s1">
                <h2 class="blog-post-title">简介</h2>
                <hr>
                <p>
                    主要说明其中的封装和更底层的Api
                    待整理!
                </p>
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
