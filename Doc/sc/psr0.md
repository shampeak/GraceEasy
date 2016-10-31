### PSR-0

根据命名规则,类名和文件名保持一致,并且首字母大写,把该文件放到 App\Library目录下

那么在程序中可以直接进行调用,这个是用PSR4进行自动加载

例如
类Rbac的文件Rbac.php放到Library下
在程序中可以这样直接调用
```
$rbar = new \Rbac();
```
