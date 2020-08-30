<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 08:55:43
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48c68f1e2650_86281143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cce4d547c7bd02da47bae9bee7c21d352206a83' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/showList.html',
      1 => 1598604927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48c68f1e2650_86281143 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BOOT_ADD;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container" style="margin-top: 20px">

        <form action="" class="form-inline" method="post">
            <!--            //就往本页面进行提交 不写action地址-->
            <div class="form-group">
                <label for="cid">选择分类：</label>
                <select class="form-control" id="cid" name="cid">

                </select>
            </div>
            <div class="form-group">
                <label for="ctitle">标题关键字：</label>
                <input type="text" class="form-control" id="ctitle" name="ctitle">
            </div>
            <div class="form-group">
                <label for="order">倒序</label>
                <input type="checkbox" class="form-control" id="order" name="order" value="desc">
            </div>
            <input type="submit" value="查询">
        </form>

        <table class="table table-bordered">
            <tr>
                <th>所属分类</th>
                <th>标题</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

                </td>
                <td>
                    <a href="/mvc2/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">查看</a>
                    <a href="/mvc2/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
