<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 08:46:50
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/upload.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4772fac59fb4_50512180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bd242988e708e91368e2c5c862deec78559676' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/upload.html',
      1 => 1598518006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4772fac59fb4_50512180 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/mvc2/index.php/admin/category/uploadfile" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传图片">
</form>
</body>
</html><?php }
}
