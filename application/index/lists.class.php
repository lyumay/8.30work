<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;
if(!defined("MVC")){
    die("非法侵入");
};
class lists{
    function int(){
        $db=new db();
        $db=$db->db;

        $cid=$_GET["cid"];
        $result=$db->query("select * from mvc_category where cid=$cid");

        //当前分类的信息
        $currentInfo=$result->fetch_assoc();

        //父类的信息
        $pid=$currentInfo["pid"];
        $result=$db->query("select * from mvc_category where cid=$pid");

        $parentInfo=$result->fetch_assoc();

        //同一级类的信息
        $pcid=$parentInfo["cid"];
        $result=$db->query("select * from mvc_category where pid=$pcid");

        $silbing=array();

        while ($row=$result->fetch_assoc()){
            $silbing[]=$row;
        }


        $result=$db->query("select * from mvc_content where cid=$cid");

        $condata=array();
        while($row=$result->fetch_assoc()){
            $condata[]=$row;
        }
        $tpl=$currentInfo["tpl_name"]?$currentInfo["tpl_name"]:"lists.html";
        $smarty=new smarty();
        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("footer",$header->footer);
        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("parentInfo",$parentInfo);
        $smarty->assign("silbing",$silbing);
        $smarty->assign("condata",$condata);
        $smarty->display("index/".$tpl);
    }
}