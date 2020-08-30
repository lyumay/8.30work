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
class category{
    function int(){
//        echo $_GET["cid"];
        $smarty=new smarty();
        $cid=$_GET["cid"];
        $db=new db();
        $db=$db->db;
        $result=$db->query("select * from mvc_category where cid=$cid");
        $currentInfo=$result->fetch_assoc();

        $result=$db->query("select * from mvc_category where pid=$cid");

        $sonInfo=array();
        while($row=$result->fetch_assoc()){
            $sonInfo[]=$row;
        }

        $coninfo=array();
//        if($currentInfo["tpl_name"]=="service.html"){
            foreach($sonInfo as $k=>$v){
                $cid=$v["cid"];
                $result=$db->query("select * from mvc_content where cid=$cid");
                $coninfo[$k]=array();
                while($row=$result->fetch_assoc()){
                    $coninfo[$k][]=$row;
                }
            }
//        }

        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        //子分类的信息
        $smarty->assign("soninfo",$sonInfo);
        //当前分类的信息
        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("coninfo",$coninfo);
        $smarty->display("index/".$currentInfo["tpl_name"]);
    }
}