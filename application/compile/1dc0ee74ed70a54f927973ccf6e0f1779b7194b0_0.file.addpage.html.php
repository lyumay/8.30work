<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-27 11:17:11
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/addpage.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f479637ba4527_23256927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc0ee74ed70a54f927973ccf6e0f1779b7194b0' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/addpage.html',
      1 => 1598526920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f479637ba4527_23256927 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<form action="/mvc2/index.php/admin/category/add" style="margin-top: 30px;margin-bottom: 30px;" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="添加一级栏目" name="cname"><br><br>
    <select name="isshow" id="">
        <option value="1">在导航可见</option>
        <option value="0">在导航不可见</option>
    </select><br><br>
    <input type="text" name="tpl_name" placeholder="输入对应的模版"><br><br>
    栏目描述：<textarea name="info" cols="30" rows="10"></textarea>

    <input type="hidden" value="hidden" name="imgurl">

    <input type="file" name="file">

    <div class="upload">

    </div>
    <input type="submit" value="添加" >

</form>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();
    uploadObj.multiple=true;
    uploadObj.createView({
        parent:document.querySelector(".upload")
    })
    uploadObj.up("/mvc2/index.php/admin/category/uploadfile",function (e) {
        $("input[type=hidden]").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
