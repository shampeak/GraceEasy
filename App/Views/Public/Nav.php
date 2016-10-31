<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">GraceEasy</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if(get('a') == 'Index' || get('a') == '' ): ?>class="active"<?php endif; ?>><a href="/">首页</a></li>
                <li <?php if(get('a') == 'Jianjie'): ?>class="active"<?php endif; ?>><a href="/?r=home/jianjie">简介</a></li>
                <li class="dropdown <?php if(get('a') == 'Shouce'): ?>active<?php endif; ?>" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">手册 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
<?php
$list = \Grace\Controller::Run('home/menulist');
//$list = $this->domenulist();
?>
<?php foreach($list as $key=>$value):?>
    <li <?php if(get('key') == $key):?>class="active"<?php endif;?>>
        <a href="/?r=home/shouce&key=<?=$key;?>"><?=$value;?></a>
    </li>
<?php endforeach;?>
                    </ul>
                </li>
                <!-- li <?php if(get('a') == 'Kaifawd'): ?>class="active"<?php endif; ?>><a href="/?r=home/kaifawd">开发文档</a></li -->
                <li <?php if(get('a') == 'Shili'): ?>class="active"<?php endif; ?>><a href="/?r=home/shili">示例</a></li>
                <li><a href="/?r=home/jianjie#s3">源码与下载</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a target="_blank">PHP学习</a></li>
                <li><a target="_blank">关于</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<span id="#top"></span>
