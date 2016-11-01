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

<?php
$list = \Grace\Controller::Run('home/menusublist');
?>


<div class="container" id="cbody">



    <div class="row">


        <div class="col-sm-3 blog-sidebar">
            <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm  sidebar-module-inset" role="complementary" style="padding-top: 50px;">
                <ul class="nav bs-sidenav">


                    <?php foreach($list as $key=>$value):?>
                    <li <?php if(get('a') == $key):?>class="active"<?php endif;?>>
                        <a href="/?r=demo/<?=$key;?>"><?=$value;?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
                <!--  -->
                <a class="back-to-top" href="#top">
                    返回顶部
                </a>
            </div>
        </div><!-- /.blog-sidebar -->

        <div class="col-sm-8 blog-main">

            <div class="blog-header">
                <ol class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li class="active">示例</li>
                </ol>
            </div>

            <!-- 目录结构 -->
            <div class="blog-post"  id="s1">
                <!-- 内容 -->

                <h2><?=$list[get('a')]?></h2>
                <hr />


                <p>浏览器地址：</p>
                <p><code>/?r=Demo/Luyou</code></p>
                <p>或者：<code>/?c=Demo&amp;a=Luyou </code></p>

                <p>路由结果：</p>
                <p>由<small><code> $router = \Grace\Router::GetRouter($_ca,$_params);</code> </small>输出</p>


<?php
$nr = "";
$html = server('Parsedown')->text($nr);
$html = str_replace('<pre>','<pre  class="brush: php;">',$html);
//$html = str_replace('<code>','',$html);
//$html = str_replace('</code>','',$html);
echo $html;
?>

浏览器地址 ：


<pre class="brush: php;">
<?php
$router = \Grace\Router::GetRouter($_ca,$_params);
print_r($router);
?>
</pre>
<p>
注意 ： r参数拆出c和a覆盖c和a参数的内容
</p>
> 对应的控制器为： <code>Demo/Luyou</code>


                <!-- /内容 -->

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
