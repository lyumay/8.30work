<?php
/*
 * 后台管理-》通用
 * 后台（广义）：指的就是一个应用的服务器部分的内容 apache mysql文件
 * 狭义：指的就是一个应用的管理中心
 *
 * */
use \libs\smarty;
use \libs\db;
use \libs\getheader;
if(!defined("MVC")){
    die("非法侵入");
};
class show{
    function int(){
        $db=new db();
        $db=$db->db;
        $conid=$_GET["conid"];

        $result=$db->query("select * from mvc_content where conid=$conid");

        $condata=$result->fetch_assoc();

        $smarty=new smarty();
        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("condata",$condata);
        $smarty->display("index/show.html");
    }
}