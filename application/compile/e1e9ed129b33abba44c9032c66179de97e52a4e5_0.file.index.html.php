<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 04:13:52
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49d600117291_73050597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e9ed129b33abba44c9032c66179de97e52a4e5' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/index.html',
      1 => 1598674431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49d600117291_73050597 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">

</head>
<body>
    <div class="header">
        <h1>欢迎来到蒲公英智能科技管理系统</h1>
        <div class="logininfo">
            <span>用户：<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
            <span>
                <a href="/mvc2/index.php/admin/index/logout">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    用户管理
                    <ul class="son">
                        <li>
                            <a href="adduser.html" target="main">查看用户</a>
                        </li>
                        <li>
                            <a href="edituser.html" target="main">修改用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    栏目管理
                    <ul class="son">
                        <li>
                            <a href="/mvc2/index.php/admin/category/addpage" target="main">添加栏目</a>
                        </li>
                        <li>
                            <a href="/mvc2/index.php/admin/category/int" target="main">查看栏目</a>
                        </li>

                    </ul>
                </li>
                <li>
                    内容管理
                    <ul class="son">
                        <li>
                            <a href="/mvc2/index.php/admin/content/add" target="main">添加内容</a>
                        </li>
                        <li>
                            <a href="/mvc2/index.php/admin/content/showList" target="main">
                                查看内容</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main"></iframe>
        </div>
    </div>
    <div class="bottom">
       <div>xx版权信息，xxx制作 联系方式</div>
    </div>
</body>
</html><?php }
}
