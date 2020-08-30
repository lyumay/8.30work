<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-24 02:23:14
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f43249273d744_41287128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322641506a4ea753fc913ae824308524e066a02d' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/login.html',
      1 => 1598235770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f43249273d744_41287128 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xx后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<?php echo '<script'; ?>
>
    //js 设置cookie 是头信息
    //获取一下当前时间
    // var date=new Date();
    // var time=date.getTime()+1000*10;//cookie不加过期时间 默认的生存周期是 当浏览器打开的时候 只要关闭的时候就自行删除//彻底的退出浏览器
    // date.setTime(time);
    // document.cookie="name=zhangsan;expires="+date.toUTCString()+"domain=localhost";
    // document.cookie="age=12;";
    //cookie服务器向我们客户端能够写入数据，客户端向我们服务器发送请求的时候，就会携带这个信息，服务器是不是就能知道我们是谁呢？客户端是不是就可以记录我们以前绘画的信息呀。
    //document.cookie="name=zhangsan";

    //如何删除cookie 设置过期的时间

<?php echo '</script'; ?>
>
<form class="form-horizontal" action="/mvc2/index.php/admin/index/login" method="post" style="height: 360px;">
    <h1>欢迎来到XX后台管理中心</h1>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="uname">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <label for="code" class="col-sm-2 control-label">验证码</label>
        <div class=" col-sm-10">
            <input type="text" placeholder="请输入验证码" name="code" id="code" style="width:35%;">
            <img src="http://localhost:8888/mvc2/index.php/admin/index/mycode" alt="" onclick="this.src='http://localhost:8888/mvc2/index.php/admin/index/mycode?'+Math.random()" style="cursor: pointer;" width="120">
            <span style="font-size: 14px">看不清楚？点击更换</span>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox">记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">登录</button>
            &nbsp;&nbsp;没有账号？请
            <a href="/mvc2/index.php/admin/reg/add">注册</a>
        </div>
    </div>
</form>
</body>
</html><?php }
}
