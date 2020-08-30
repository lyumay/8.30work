<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 07:39:31
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/business.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b57b3927313_30773632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b120bc12ace2435bfd7be1a3ec3b2d849f9469f8' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/business.html',
      1 => 1598773170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b57b3927313_30773632 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div style="height: 360px">

    <h1 style="text-align: center;padding-top: 150px"><span style="color:#FF0000;">您的权限不足...</span></h1>

    <div style="text-align: center;">&nbsp;</div>


    <div style="text-align: center;">
        你可以<a href="/mvc2/application/template/index/login.html" rel=""  url-flag="0" url-flagtarget="" style="color: #337ab7">登录</a> 或者 <a href="/mvc2/application/template/index/enroll.html" url-flag="0" url-flagtarget="" style="color: #337ab7">注册</a>后访问，如果还无法访问，请联系网站管理员。</div>
</div>


<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
