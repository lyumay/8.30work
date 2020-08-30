<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-25 10:12:25
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f44e409c14410_25745623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63614c65fdbcafff0b47abca24279ceab4cb0e0' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/show.html',
      1 => 1598350343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f44e409c14410_25745623 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
<h3>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>

</h3>
<p>
    <?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>

</p>
<a href="/mvc2/index.php/admin/content/showList">返回</a>
</body>
</html><?php }
}
