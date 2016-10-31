## GraceServer
> GraceServer核心文件

## server
#### 加载配置文件到对应的底层类并new对象（单例模式 server层）

示例

```
$cookie = server('cookies');
$cookie->get('nsc');
$cookie->set('bt','world');
```

底层类

```
cookie对应的底层类路径：/vendor/grace/server/Cookies/Cookies.php
```

#### 拓展 ####

##### 加载包 #####
```
如果你想拓展底层，或者有更好的想法，想在底层添加新的功能文件，就需要这三步
1、路径： /Grace/Config/Config.php 为配置文件
   ProvidersConfig 数组中配置信息
   Providers 数组中添加你的类映射 (注意命名空间)
2、路径： /vendor/grace/server添加你的类文件（不建议在此处更改）

注意：GraceStand支持composer
      你可以通过composer来下载对应的包之后,进行以上配置

```
示例

```
GraceStand集成的markdown解析器parsedown

1、通过composer下载对应的包
   "require": {
       "erusev/parsedown": "^1.6"
    }
2、配置文件
3、路径： /Grace/Config/Config.php
   'Providers'=>[
        'Parsedown' => Parsedown::class
    ],
ok
```

##### 获取server配置信息 #####

```
$config = Config();
print_r($config);       //输出配置信息
```
#####  读取某server配置文件中某一注册的配置文件 #####

```
server()->Config('Db');

输出结果

Array
(
    [port] => 3306
    [username] => viga
    [password] => root
    [password] => root
    [database] => viga
    [charset] => utf8
    [pconnect] => 0
    [quiet] => 0
    [slowquery] => 1
    [rootpath] => ../App/Cache/

)

```

相关配置
```
/**
 * server容器的相关配置
 */
'Server'=>[

    //容器对象配置
    'ProvidersConfig'  => [
        //'V'         =>'V.php',
        //'Smarty'    => 'Smarty.php',

        //视图相关设置
        'View'  => [
            'Viewpath'=> GRACE.'../App/Views/',         //跟Router['View_Folder']        //保持一致
        ],

        /**
         * Memcache配置
         */
        'Mmc'=>[
            'MEM_ENABLE'  => true,   //不启用
            'MEM_SERVER'  =>
                [
                    ['127.0.0.1', 11211],
                ],
            'MEM_GROUP'   => 'channelgst',
        ],

        /**
         * LOG 相关配置
         */
        'Log'       => [
            //日志文件 文件地址
            'path'=> GRACE.'../App/Cache/Log/dt.log'
        ],

        /**
         * 容器中数据库对象
         */
        'Db'        => [
            'hostname'      => '127.0.0.1',         //服务器地址
            'port'          => '3306',              //端口
            'username'      => 'root',              //用户名
            'password'      => 'root',              //密码
            'database'      => 'viga',              //数据库名
            'charset'       => 'utf8',              //字符集设置
            'pconnect'      => 0,                   //1  长连接模式 0  短连接
            'quiet'         => 0,                   //安静模式 生产环境的
            'slowquery'     => 1,                   //对慢查询记录
            'rootpath'      => GRACE.'../App/Cache/',   //慢查询记录文件
        ],

        /**
         * cookies配置
         * cookie中的数据进行了encrypt加密存储在本地
         */
        'Cookies'   => [
            'prefix'   => 'GraceEasy',              // cookie prefix 前缀         获取 config('Cookies')['prefix']
            'securekey'=> 'uJeixezgPNyALm',         // encrypt key   密钥
            'expire'   => 36000,                    //超时时间
        ],

        /**
         * cache相关配置
         */
        'Cache'     => [

            /**
             * File cache
             */
            'cacheType' => 'File',
            'cacheDir'  =>  GRACE.'../App/Cache/tmp',
            'adapter'   => \Desarrolla2\Cache\Adapter\File::class,

            /**
             * memcache
             * 需要安装memcache
             */
//                'cacheType' => 'Memcache',
//                'adapter'   => \Desarrolla2\Cache\Adapter\Memcache::class,
//                'server'    => [
//                    ['127.0.0.1', 11211]
//                ],

            //默认缓存时间
            'ttl'       => 3600

        ],

    ],

    //容器对象
    'Providers'=>[
        'Parsedown' => Grace\Parsedown\Parsedown::class,
        'Req'       => Grace\Req\Req::class,
        'Db'        => Grace\Db\Db::class,
        'Cookies'   => Grace\Cookies\Cookies::class,
        'Cache'     => Grace\Cache\Cache::class,
        'Mmc'       => Grace\Mmc\Mmc::class,
//            'Xls'       => Grace\Xls\Xls::class,
//            'Smarty'    => Grace\Smarty\Smarty::class,
        'View'      => Grace\View\View::class,
        'Log'       => Grace\Log\Log::class,
    ],

]

```