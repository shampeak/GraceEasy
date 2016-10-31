## view ##
#### 视图显示View ####

##### 一. GraceEasy默认的视图显示是PHP文件 直接进行include，封装方法如下


- 如果你想使用smarty，做以下修改

/Application/Helper.php
```
if (! function_exists('view')) {
    function view($tpl = null, $data = [])
    {
        $router = \Grace\Router::GetRouter();
        $views = server('Smarty')->router($router);
        $views->display($tpl, $data);
    }
}
```

## 二. 视图显示

- 方法 view($view_file_name=null,data=[])
```
/*
注释：
1. 需要修改快捷参数view的默认显示 （1中第一部分）
2. 参数：第一个参数视图文件名（test代表test.php文件），第二个参数显示数据
3. 显示视图必须为同一控制器内的视图
4. 如果所请求的方法名同视图名相同，可省略第一个参数
*/
view('test',[
        'a'=>'nsc'
]);
```

- 方法 fetch()获取页面生成的html(加入缓冲区)
```
$html = fetch('test',[
        'a'=>'nsc'
]);
echo $html;
```

相关配置
```
    //视图相关设置
    'View'  => [
        //定义视图根路径
        'Viewpath'=> GRACE.'../App/Views/',
    ],

```

相关封装源码
/Grace/Helper.php
```
//view 方法
    if (! function_exists('view')) {
        function view($tpl = null, $data = [])
        {
            $router = \Grace\Router::GetRouter();
            $views = server('View')->router($router);
            $views->display($tpl, $data);
        }
    }
//fetch方法
    if (! function_exists('fetch')) {
        function fetch($tpl = null, $data = [])
        {
            $router = \Grace\Router::GetRouter();
            $views = server('View')->router($router);
            return $views->fetch($tpl, $data);
        }
    }
```
