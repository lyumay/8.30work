<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 13:47:50
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/service.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bae0669e738_14237553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028eef0286e96fe9051ef918a52407ce8f784ab8' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/service.html',
      1 => 1598795186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bae0669e738_14237553 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/service.css">
</head>
<body >
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="descImg"></div>
<div class="newPro">
    <div class="proTit">
        <p>产品说明书下载</p>
    </div>
</div>
<style>
    .my-service{
        /*border: 1px solid red;*/
        width: 1200px;
        text-align:left;
        margin: 10px auto;
        background: white;
    }
    .my-service h3{
        font-family: 微软雅黑;
        font-size: 24px;
        font-weight: bold;
        color: #333333;
        padding: 0 0 10px 0;
        border-width: 0 0 1px 0;
        border-style: solid;
        /*border-color: black;*/
    }
    .my-service-box{
        width: 1200px;margin: auto;
        /*border: 1px solid blue ;*/
    }
    .my-service-list{
        float: left;width: 590px;height: 70px;
        margin-right: 10px;
    }
    .my-service-list h4{
        margin-top: 35px;
        font-family: Open Sans;
        font-size: 15px;
        font-weight: normal;
        font-style: normal;
        color: #4f4f4f;
        padding: 0 0 10px 0;
        border-width: 0 0 1px 0;
        border-style: solid;
        border-color: #dfdde5;
    }
    .my-service-list a{
         display:inline-block;
        float: right;
        background: #333333;
        width: 60px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        font-size: 14px;
    }
    h1,h2,h3,h4,h5,h6{
        padding: 0;margin: 0;
    }
</style>

<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[0]["cname"];?>
</h3>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[0], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
<a href="" style="color: white">下载</a></h4>
            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>

<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[1]["cname"];?>
</h3>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[1], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
<a href="" style="color: white">下载</a></h4>
            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>

<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[2]["cname"];?>
</h3>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[2], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
<a href="" style="color: white">下载</a></h4>
            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<div class="my-service">
    <h3><?php echo $_smarty_tpl->tpl_vars['soninfo']->value[3]["cname"];?>
</h3>
    <div class="my-service-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coninfo']->value[3], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <ul class="my-service-list">
            <li>
                <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
<a href="" style="color: white">下载</a></h4>
            </li>
        </ul>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear: both"></div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
