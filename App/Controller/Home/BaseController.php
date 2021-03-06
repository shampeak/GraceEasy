<?php

namespace App\Home;

class BaseController{

    public function __construct(){

    }

    /**
     * @return array
     * 手册的二级菜单
     */
    public function doMenulist(){
        return [
            'readme'        => '简述',
            'srshuchu'      => '输入输出',
            'rukou'         => '入口',
            'psr0'          => 'PSR0',
            'mmguifan'      => '命名规范',
            'mmkongjian'    => '命名空间',
            'kongzhiqi'     => '控制器',
            'moxing'        => '模型',
            'xtpeizhi'      => '系统配置',
            'luyou'         => '路由',
            'shitu'         => '视图',
            'GraceServer'            => 'GraceServer',
        ];
    }

    public function doMenusublist(){
        return [
            'Luyou'        => '路由',
            'Data'        => '数据调用',
            'Page'        => '页面',
        ];
    }


}

//home/menulist