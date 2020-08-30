<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 04:03:56
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/about.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f49d3acb00c01_10040615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b9990c1ed6a4d2be463b8e133a4fbc5892f67bd' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/about.html',
      1 => 1598673770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f49d3acb00c01_10040615 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>关于我们--仅作学习使用，侵删</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.cs">
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/about.css">
<body>
<!--  头部开始  -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<!-- 介绍图片开始 -->
<div class="descImg"></div>
<!-- 介绍图片结束 -->
<!-- 关于开始 -->
<div class="about">
    <div class="aboutContent">
        <div class="aboutTit">关于我们</div>
        <p>PGYTECH(蒲公英智能科技)源自于一群热爱航拍与摄影的年轻人对更佳摄影体验的</p>
        <p>追求。理解需求，每一个创新的理念都源自于对摄影的切身体会; </p>
        <p>追求卓越，每一个产品的打磨都疑聚了设计师对摄影的热爱和理解。自公司创立以来,</p>
        <p>我们一直秉持着"创新,品质,客户体验"的核心理念，不懈追求更高品质的产品和更好</p>
        <p>的客户体验，为每一位摄影爱好者创造航拍与摄影的更多可能性</p>
    </div>
</div>
<!-- 关于结束 -->
<!-- 底部开始 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
