<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 09:14:27
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b6df3476ba1_16988799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2f081560bbe48ba01b03c640ff4c1565630f591' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/lists.html',
      1 => 1598778865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b6df3476ba1_16988799 (Smarty_Internal_Template $_smarty_tpl) {
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
<style>
    .newPro{
        width: 1300px;
        height: 900px;
        margin: 0 auto;
        margin-top: 40px;
    }
    .newPro .proTit p{
        position: relative;
        width: 280px;
        height: 30px;
        margin: 0;
        line-height: 30px;
        font-size: 24px;
        font-weight: bolder;
        color: black;
        text-align: center;
        margin-bottom: 20px;
    }
    .newPro ul{
        list-style: none;
    }
    .newPro ul li{
        position: relative;
        display: inline-block;
        float: left;
        width: 365px;
        height: 365px;
        /*box-shadow: 0 0 10px #ddd;*/
        /*border: 1px solid red;*/
        margin: 20px ;
        margin-left: 35px;
        border-radius: 3px;
        overflow: hidden;
    }

    .newPro ul li img{
        margin: 2px;
        width: 100%;
        height: 80%;
    }

    .newPro ul li div{
        position: relative;
        width: 100%;
        text-align: center;
        color: black;
    }

</style>
<div class="newPro">
    <div class="proTit">
        <p>OSMO ACTION</p>
    </div>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <a href="/mvc2/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
            <div class="info"><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</div>
            </a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>

<div class="newPro">
    <div class="proTit">
        <p>OSMO ACTION</p>
    </div>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <li>
            <a href="/mvc2/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="">
                <div class="info"><?php echo $_smarty_tpl->tpl_vars['v']->value['info'];?>
</div>
            </a>
        </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
