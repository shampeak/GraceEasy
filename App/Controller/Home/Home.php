<?php

namespace App\Home;

class Home extends BaseController{

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
     * 简介
     */
    public function doJianjie(){
        view('');
    }

    /**
     * 手册
     */
    public function doShouce(){

        $list = $this->domenulist();

        $key = get('key')?:'Readme';
        $file = GRACE.'../Doc/sc/'.$key.'.md';

        if(is_file($file)){
            $fnr = file_get_contents($file);
            $nr = server('Parsedown')->text($fnr);
            $nr = str_replace('<pre>','<pre  class="brush: php;">',$nr);
            $nr = str_replace('<code>','',$nr);
            $nr = str_replace('</code>','',$nr);
        }

        view('',[
            'list'  => $list,
            'nr'    => $nr
        ]);
    }

    /**
     * 开发文档
     */
    public function doKaifawd(){
        view('');
    }

    /**
     * 示例
     */
    public function doShili($params = []){


        view('');
    }

}
