## 模型

命名空间(必须)

#### 一、 /App/Model/(模型层)

路径：/App/Model/test.php

使用
```
model('test')->run();
//test为类名
//run()方法
```

示例源码

```
namespace App\Model;
class Test
{
    public function __construct()
    {
    }
    public function run()
    {
       echo 'model : Test model run';
    }
}
```

模型调用的封装

```
    function Model($Modelname = '',$params = [])
    {
        $class = '\\App\\Model\\'.ucfirst(strtolower($Modelname));
        if(class_exists($class)){
            return new $class($params);
        }else{
            halt("Miss class!!");
        }
    }
```