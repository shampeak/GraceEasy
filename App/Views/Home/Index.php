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
    <link href="/assets/css/U.css" type="text/css" rel="stylesheet"/>


<style>
    @media screen and (max-width: 768px) {
        .jumbotron {
            padding-top: 18px;
            padding-bottom: 18px;
        }
        .container .jumbotron,
        .container-fluid .jumbotron {
            padding-right: 20px;
            padding-left:20px;
        }
        .jumbotron h1,
        .jumbotron .h1 {
            font-size: 23px;
        }
    }
</style>



</head>

<body>

<?php include Config('Router')['View_Folder']."Public/Nav.php"; ?>

<div class="container" id="cbody">
    <!-- Jumbotron -->
    <div class="jumbotron">
        <h1>GraceEasy</h1>
        <p class="lead">　　GraceEasy是一个免费、开源、敏捷的MVC模式的PHP开发框架。它易拓展而不失灵活，可以轻松对应大中小型项目。它没有大而全的功能，只给你最需要的底层功能，但是给你无限的灵活拓展能力。<a href="">详细介绍</a></p>
        <p><a class="btn btn-lg btn-success" href="https://github.com/shampeak/GraceEasy" role="button">Get started right now!</a></p>
    </div>

    <!-- Example row of columns -->

    <hr class="featurette-divider">

    <div class="row" style="text-align: center;padding-top: 50px;padding-bottom: 50px;">
        <div class="col-lg-4" style="text-align: center;">
            <h2>简单</h2>
            <p>
                抛弃不常用的繁杂的功能,值保留基础功能,是代码简洁,易于拓展和使用!
            </p>

        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center;">
            <h2>灵活</h2>
            <p>
                所有代码层层封装,灵活配置和调用
            </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center;">
            <h2>可靠</h2>
            <p>
                单元测试,
            </p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <hr class="featurette-divider">

    <div class="row" style="text-align: center;padding-top: 50px;padding-bottom: 50px;">
        <div class="col-lg-4" style="text-align: center;">
            <h2>轻量级</h2>
            <p>
                整个代码加起来只有300K,真正的轻量级!
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4" style="text-align: center;">
            <h2>模块化</h2>
            <p>
                低耦合,模块化,维护和使用都很方便
            </p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4" style="text-align: center;">
            <h2>全文档支持</h2>
            <p>
                完善的说明文档!
            </p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->

    <hr class="featurette-divider">



</div> <!-- /container -->

<?php include Config('Router')['View_Folder']."Public/Footer.php"; ?>

<script src="/assets/js/jquery-1.11.1.min.js"></script>
<script src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
