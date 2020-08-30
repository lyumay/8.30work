<?php
if(!defined("MVC")){
    die("非法侵入");
};
use \libs\smarty;
use \libs\db;
use \libs\upload;
class content{
    function add(){
        $smarty=new smarty();
        $smarty->display("admin/addcon.html");
    }
    function addcon(){
//        var_dump($_POST);
        $cid=$_POST["cid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $imgurl=$_POST["imgurl"];
        $info=$_POST["info"];

        $database=new db();
        $db=$database->db;
        $db->query("insert into mvc_content (ctitle,cons,cid,imgurl,info) VALUES ('$ctitle','$cons','$cid','$imgurl','$info')");
        if($db->affected_rows>0){
            echo "<script>alert('插入成功');location.href='/mvc2/index.php/admin/content/add'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='/mvc2/index.php/admin/content/add'</script>";
        }
    }
    function showList(){
//        echo "查看内容";
        $database=new db();

        $sql="select * from mvc_content as con left join mvc_category as cat on con.cid=cat.cid where 1=1";

        if(isset($_POST["cid"])&&!empty($_POST["cid"])){
            $sql.=" and con.cid=".$_POST["cid"];
        }
        if(isset($_POST["ctitle"])&&!empty($_POST["ctitle"])){
            $wordkey=$_POST["ctitle"];
            $sql.=" and ctitle like '%".$wordkey."%'";
        }
        if(isset($_POST["order"])&&!empty($_POST["order"])){
            $order=$_POST["order"];
            $sql.=" order by conid ".$order ;
        }


//        echo $sql;

        $db=$database->db;
        $result=$db->query($sql);
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }
    function show(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/show.html");
    }
    function edit(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/edit.html");
    }
    function edition(){
        $conid=$_POST["conid"];
        $cid=$_POST["cid"];
        $ctitle=$_POST["ctitle"];
        $cons=$_POST["cons"];
        $imgurl=$_POST["imgurl"];
        $info=$_POST["info"];
        $database=new db();
        $db=$database->db;
        $db->query("update mvc_content set ctitle='$ctitle',cons='$cons',cid='$cid',imgurl='$imgurl',info='$info' where conid=".$conid);

        if($db->affected_rows>0){
            echo "<script>alert('修改成功');location.href='/mvc2/index.php/admin/content/edit?conid={$conid}'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='/mvc2/index.php/admin/content/edit?conid={$conid}'</script>";
        }
    }
    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/mvc2/".$upload->fullpath;
        echo "$path";
    }
    function tinyuploadfile(){//富文本编辑器里面的图片上传
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/mvc2/".$upload->fullpath;
        echo json_encode(array('location' => $path));
    }
}