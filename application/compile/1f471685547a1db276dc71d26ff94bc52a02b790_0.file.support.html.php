<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:07:54
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/support.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b969a69e667_63671780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f471685547a1db276dc71d26ff94bc52a02b790' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/support.html',
      1 => 1598789268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b969a69e667_63671780 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>服务与支持--仅作学习使用，侵删</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.cs">
<link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/support.css">
<body>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<!-- 介绍图片开始 -->
<div class="descImg"></div>
<!-- 介绍图片结束 -->

<!-- 服务与支持开始 -->
<div class="record">
    <div class="proTit">
        <p>服务与支持</p>
    </div>
    <ul class="lists-box">
        <div class="list-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li class="list" style="margin-left: 100px">
                <a href="/mvc2/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" height="60px">
                    <p style="color: black"> <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</p>
                </a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div style="clear:both"></div>
        </div>
    </ul>
</div>
<!-- 服务与支持结束 -->
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
