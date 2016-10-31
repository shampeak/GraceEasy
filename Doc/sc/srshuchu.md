## 输入输出

相关代码

## 安全 : 注入

封装
```
/*
 |------------------------------------------------------
 | 对数据进行魔术变换
 |------------------------------------------------------
*/
function saddslashes($string) {
    if(is_array($string)) {
        foreach($string as $key => $val) {
            $string[$key] = saddslashes($val);
        }
    } else {
        $string = addslashes($string);
    }
    return $string;
}
```

数据调用
```
//字符串过滤
$str = "test str";
$str = saddslashes($str);
//数组过滤
$str = ['dog','cat','fox'];
$str = saddslashes($str);
```

## 安全 : xxs

封装
```
//数据实体转义
if (! function_exists('xss_clean')) {
    function xss_clean($key = null)
    {
        $res = \Grace\Input::xss_clean($key);
        return $res;
    }
}
```

示例
```
//字符串过滤
$str = "test str";
$str = xss_clean($str);
//数组过滤
$str = ['dog','cat','fox'];
$str = xss_clean($str);
```

## GET获取

封装的代码
```
    if (! function_exists('get')) {
        function get($key = null,$xss_clean = false)
        {
            $res = \Grace\Input::get($key,$xss_clean);
            return $res;
        }
    }
```
示例
```
//获取 $_GET['a']
$str = get('a',true);       //数据实体转义
$str = get('a');            //获取数据
//todo
$str = getint('a');         //获取整型数据
$str = getint('a',0,10);    //限定范围
```

## POST获取
封装的代码
```
    if (! function_exists('post')) {
        function get($key = null,$xss_clean = false)
        {
            $res = \Grace\Input::post($key,$xss_clean);
            return $res;
        }
    }
```
示例
```
//获取 $_GET['a']
$str = post('a',true);       //数据实体转义
$str = post('a');            //获取数据
//todo
$str = postint('a');         //获取整型数据
$str = postint('a',0,10);    //限定范围
```

## cookies
```
server('cookies')->get('title');            //获取
server('cookies')->set('title',$value,10);  //设置
```

## 缓存
```
server('cache')->get('title');            //获取
server('cache')->set('title',$value,10);  //设置
```

## Memcache缓存
```
server('mmc')->get('title');            //获取
server('mmc')->set('title',$value,10);  //设置
```