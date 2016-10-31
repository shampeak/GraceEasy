
### 命名空间

>系统所使用的命名空间有以下几个
1. Grace

对应目录为 \Grace

例如 \Grace\Bootstrap 对应 Grace目录下 Bootstrap.php文件中的Bootstrap类

2 : App

对应目录为 \App

例如 \App\Model\User 对应 App目录下Model目录下User.php文件中的User类

3 : \

根,对应于App目录下的Library目录

例如 \Rbac 对应于App\Library目录下的Rbac.php文件中Rbac类

>避开Grace的几个内容

Grace已经使用的命名空间包括

Grace\Base
Grace\Cache
Grace\Cookies
Grace\Db
Grace\Log
Grace\Mmc
Grace\Parsedown
Grace\Req
Grace\Server
Grace\Smarty
Grace\View
Grace\Wise
Grace\Xls

在实际开发过程当中,为避免出错,应该避开这几个命名空间的使用!
