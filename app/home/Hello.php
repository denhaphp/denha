<?php
namespace app\home;

use denha\Controller;
use denha\HttpResource;

class Hello extends Controller
{
    public function index()
    {

        return $this->view('<style type="text/css">*{ padding: 0; margin: 0; }a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; }body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; }p{ line-height: 1.6em; font-size: 47px;text-align:center;margin-top:20%; }ul{width:700px;margin:0 auto;}ul li{float:left; padding:0 35px;list-style:none;}</style><p> Denha <br/></p><div><ul><li><a href="/home/hello/detail">详情模板</a></li><li><a href="https://www.kancloud.cn/siyuedays/denha/">文档介绍</a></li><li><a href="https://github.com/denhaphp/denha">Github</a></li><li><a href="https://github.com/denhaphp/denha/blob/master/README.md">版本更新</a></li><li><a href="https://github.com/denhaphp/denha/blob/master/README.md">假装占位</a></li></ul></div>');
    }

    public function detail()
    {
        print_r(HttpResource::$request);
    }

    public function ajax()
    {

        return $this->ajaxReturn(['status' => false, 'msg' => 1111]);
    }
}