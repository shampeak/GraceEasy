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

}
