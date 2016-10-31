
### 控制器

例如 home/index

代码如下

```
<?php
namespace App\Home;
class Home extends BaseController{
    use  \App\Traits\AjaxReturn;            //引用traits
    public function __construct(){
        parent::__construct();
    }
    public function doIndexPost(){          //对post进行响应
        $this->AjaxReturn();
    }
    public function doIndex(){              //前缀 + 方法名
    }
}
```

### 相关配置
```
 /** 路由相关
     * 控制器相关
     * 默认控制器文件名称
     * 就是控制器文件夹下面的Home文件夹里面Index.php(假定后缀是.php)
     */
    'Router'=>[
        'Application_Folder'=> GRACE . '../App/',
        'Controller_Folder' => GRACE . '../App/Controller/',      //存放控制器文件的文件夹路径名称
        'Model_Folder'      => GRACE . '../App/models/',           //存放模型文件的文件夹路径名称,支持数组
        'View_Folder'       => GRACE . '../App/views/',            //存放视图文件的文件夹路径名称,支持数组
        'library_Folder'    => GRACE . '../App/library/',          //存放类库文件的文件夹路径名称,存放在该文件夹的类库中的类会自动加载,支持数组
        'Helper_Folder'     => GRACE . '../App/helper/',           //存放函数文件的文件夹路径名称,支持数组
        'Table_Cache_Folder'=> GRACE . '../App/cache/',            // table()方法缓存表字段信息的文件夹路径名称
        'Hmvc_Folder'       => GRACE . '../App/modules/',          //存放HMVC模块的文件夹路径名称

        'Default_Controller'        => 'Home',          //默认的控制器
        'Default_Controller_Method' => 'Index',         //默认控制器方法名称,不要带前缀
        'Controller_Method_Prefix'  => 'do',            //控制器方法名称前缀
//        'Controller_file_Subfix'    => '.php',          //控制器文件名称后缀,比如.php或者.controller.php
//        'View_File_Subfix'          => '.view.php',     //视图文件名称后缀,比如.view.php
    ],
```
