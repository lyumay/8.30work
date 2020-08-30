<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 04:02:51
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/contact.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49d36ba23d65_82421222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d3a6c68d98da7aa87c6712c252f7c4eff2589a8' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/contact.html',
      1 => 1598673770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49d36ba23d65_82421222 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>联系我们--仅作学习使用，侵删</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.cs">
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/contact.css">
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- 介绍图片开始 -->
<div class="descImg"></div>
<!-- 介绍图片结束 -->
<!-- 关于开始 -->
<div class="about">
    <div class="aboutContent">
        <div class="aboutTit">联系我们</div>
        <p>地址：苏州昆山市淀山湖镇万园路66号</p>
        <p>电话：0512-5013-2660</p> 
        <p>邮箱：info@pgytech.com</p>
        <p>周一至周五09:00-17:00（北京时间）</p>
    </div>
    <div class="right">
        <input type="text" placeholder="姓名" required style="width: 500px; height: 40px;"><br>
        <br>
        <input type="email" placeholder="邮箱"style="width: 500px; height: 40px;"><br>
        <br>
        <input type="text" placeholder="联系电话" required style="width: 500px; height: 40px;"><br>
        <br>
        <input type="text" placeholder="内容" required style="width: 500px; height: 60px;">
        <br>
        <br>
        <div class="submit">
            提交
        </div>
    </div>
</div>
<!-- 关于结束 -->
<!-- 底部开始 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
<?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
</html><?php }
}
