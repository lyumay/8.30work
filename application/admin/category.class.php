<?php
if(!defined("MVC")){
    die("非法侵入");
};
use \libs\smarty;//类的自动载入
use \libs\db;//类的自动载入
use \libs\upload;
class category{
    public $arr=array();
    function int(){
        $smarty=new smarty();
        //要查询数据库 放入到页面当中
        $database=new db();
        $this->db=$database->db;
        $str="";
//        $str="<table class='table table-bordered'>";
        $this->tree(0,$str);
//        $str.="<table>";

//       $result=$db->query("select * from mvc_category");
//        $data=array();
//        while($row=$result->fetch_assoc()){
//            $data[]=$row;
//        }
//
        $smarty->assign("data",$str);
        $smarty->display("admin/category.html");
    }
    //传值和传址
    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from mvc_category where pid=".$pid);
        while ($row=$result->fetch_assoc()){
            if($row["isshow"]==1){
                $s="可见";
            }else{
                $s="不可见";
            }
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("-->",$i).$row["cname"].'</td><td>'.$s.'</td><td>
<a href="javascript:;" attr="'.$row["cid"].'" class="add">添加</a> 
<a href="/mvc2/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'" class="remove">删除</a> 
<a href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'" class="edit">修改</a></td></tr>';

            $this->tree($row["cid"],$str,$i+1);
        }
    }
    function show(){
       $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_category where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }

    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from mvc_category where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "cname"=>$row["cname"],
                "cid"=>$row["cid"],
                "pid"=>$row["pid"],
            );
            $this->treeOption($row["cid"],$arr[$i]["child"]);
            $i++;
        }
    }
    function addpage(){
        $smarty=new smarty();
        $smarty->display("admin/addpage.html");
    }

    function add(){
//        echo "添加栏目";
        if(isset($_POST["cid"])){
            $cid=$_POST["cid"];
        }else{
            $cid=0;
        }
        $path=$_POST["imgurl"];
        $cname=$_POST["cname"];
        $isshow=$_POST["isshow"];
        $tpl_name=$_POST["tpl_name"];
        $info=$_POST["info"];
        $database=new db();
        $db=$database->db;
        $db->query("insert into mvc_category (cname,pid,isshow,tpl_name,info,imgurl) values ('$cname','$cid',$isshow,'$tpl_name','$info','$path')");
        if($db->affected_rows>0){
            header("location:/mvc2/index.php/admin/category");
        }
    }
    function del(){
        //删除栏目
        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;

        $result=$db->query("select * from mvc_category where pid=".$cid);
        if($result->num_rows>0){
            echo "<script> alert('请先删除子目录');location.href='/mvc2/index.php/admin/category'</script>";
        }else{
            $db->query("delete from mvc_category where cid=".$cid);
            if($row=$db->affected_rows>0) {
                header("location:/mvc2/index.php/admin/category");
            }
        }
    }

    //修改内容
    function edition(){
//        echo "修改栏目";
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $isshow=$_GET["isshow"];
        $info=$_GET["info"];
        $tpl_name=$_GET["tpl_name"];
        $imgurl=$_GET["imgurl"];
        $database=new db();
        $db=$database->db;

        $db->query("update mvc_category set cname='{$cname}',pid={$pid},isshow=$isshow,info='$info',tpl_name='$tpl_name',imgurl='{$imgurl}' where cid=".$cid);
        if($db->affected_rows>0){
            echo "ok";
        }
    }
    function upload(){
        $smarty=new smarty();
        $smarty->display("admin/upload.html");
    }
    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/mvc2/".$upload->fullpath;
        echo "$path";
    }
}