<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 00:58:03
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/project.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48569ba07cc2_55608396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c02969ac5d3ade6d702914fa51f6ee5be7a29e8' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/project.html',
      1 => 1598576281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48569ba07cc2_55608396 (Smarty_Internal_Template $_smarty_tpl) {
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
    .lists-box{
        width: 1000px;
        background: #fff;
        margin: 10px auto;
        border: 1px solid red;
        padding: 0 50px;
        box-sizing: border-box;
    }
    .list-content{
        width: 800px;
        margin: auto;
    }
    .list{
        float: left;
        width: 200px;
        height: 200px;
        text-align: center;
    }
    .list a{
        width: 100%;height: 100%;
        text-decoration: none;
    }
</style>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<ul class="lists-box">
    <div class="list-content">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['soninfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li class="list">
            <a href="/mvc2/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" height="60px">
                <h3>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </h3>
                <p> <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>
</p>
            </a>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div style="clear:both"></div>
    </div>
</ul>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
