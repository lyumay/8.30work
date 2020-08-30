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

class index{
    function int(){
        $smarty=new smarty();

//        $arr=array();
//        $database=new db();
//        $db=$database->db;
//
//        $i=0;
//        $result=$db->query("select * from mvc_category  where pid=0");
//        while ($row=$result->fetch_assoc()){
//            $arr[$i]=$row;
//            $result1=$db->query("select * from mvc_category  where pid=".$row['cid']);
//            while($row1=$result1->fetch_assoc()){
//                $arr[$i]["child"][]=$row1;
//            }
//            $i++;
//        }
        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->display("index/index.html");


    }

    function del(){
        echo "删除";
    }
}