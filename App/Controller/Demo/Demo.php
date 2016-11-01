<?php

namespace App\Demo;

class Demo extends BaseController{

    public function __construct(){
        parent::__construct();
    }

    /**
     * 首页
     */
    public function doIndex(){
        view('');
    }

    /**
     * 路由
     */
    public function doLuyou(){
        view('');
    }


    /**
     * 内部数据调用
     */
    public function doData(){
        view('');
    }


    public function doPage(){
        view('');
    }


    public function doDatatest(){
        return "这是 demo/datatest 的反馈内容";
    }


}
