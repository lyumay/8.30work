<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 11:31:07
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b8dfbca98a8_16663922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7c5820cc22679d1225c81eab3423a4efa4ad9e4' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/show.html',
      1 => 1598787066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b8dfbca98a8_16663922 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
    .list-box{
        width: 1000px;
        margin: 10px auto;
    }
</style>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="list-box">
     <h1>
         <?php echo $_smarty_tpl->tpl_vars['condata']->value["ctitle"];?>

     </h1>
    <p>
        <img src="<?php echo $_smarty_tpl->tpl_vars['condata']->value['imgurl'];?>
" alt="">
    </p>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
