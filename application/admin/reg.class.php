<?php
if(!defined("MVC")){
    die("非法侵入");
};
use \libs\smarty;//类的自动载入
use \libs\db;//类的自动载入
class reg{//类的自动载入
//class reg extends main {//继承父类的方法
    function add(){
        $smarty=new smarty();//类的自动载入
        $smarty->display("admin/reg.html");//类的自动载入
//        $this->smarty->display("admin/reg.html");//继承父类的方法
    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if($pass!==$pass1){
            die("密码不一致");
            return;
        }
        //连接数据库
//        $db=new mysqli("localhost","root","root","wui2006");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
//        $db=$this->db;//继承父类的方法
        $database=new db();//类的自动载入
        $db=$database->db;//类的自动载入

        $result=$db->query("select uname from mvc_user where uname='{$uname}'");
        if($result->num_rows>0){
            echo "用户名存在";
            return;
        }
        $pass=md5(md5($pass));
        $db->query("insert into mvc_user (uname,pass) VALUES ('$uname','$pass')");
        if($db->affected_rows>0){
            echo "注册成功";
        }
    }
    function checkName(){
        $uname=$_POST["uname"];
//        $db=new mysqli("localhost","root","root","wui2006");
//        if(mysqli_connect_error()){
//            die("数据库连接错误");
//        }
//        $db->query("set names utf8");
//        $db=$this->db;//继承父类的方法
        $database=new db();//类的自动载入
        $db=$database->db;//类的自动载入
        $result=$db->query("select uname from mvc_user where uname='{$uname}'");

        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }
    }
}