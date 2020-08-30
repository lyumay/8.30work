<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 02:17:22
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f486932f28fe0_82726222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c30178cca065a89572d5d1c13ab4954e106fb25' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/category.html',
      1 => 1598581038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f486932f28fe0_82726222 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
</head>
<body>
<div class="container">
<!--    <form action="/mvc2/index.php/admin/category/add" style="margin-top: 30px;margin-bottom: 30px;" method="post" >-->
<!--        <input type="text" placeholder="添加一级栏目" name="cname">-->
<!--        <select name="isshow" id="">-->
<!--            <option value="1">在导航可见</option>-->
<!--            <option value="0">在导航不可见</option>-->
<!--        </select>-->
<!--        <input type="text" name="tpl_name" placeholder="输入对应的模版">-->
<!--        <input type="submit" value="添加" >-->
<!--    </form>-->
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <table class="table table-bordered">
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

    </table>
<!--    <table class="table table-bordered">-->
    <!--        <tr>-->
<!--            <td>层级</td>-->
<!--            <td>分类名称</td>-->
<!--            <td>编辑</td>-->
<!--        </tr>-->
<!--        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>-->
<!--        <tr>-->
<!--            <td>一级分类</td>-->
<!--            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>-->
<!--            <td>-->
<!--                <a href="javascript:;" attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">-->
<!--                    添加-->
<!--                </a>-->
<!--            </td>-->
<!--        </tr>-->
<!--        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->
<!--        <tr>-->
<!--            <td>二级分类</td>-->
<!--            <td>->项目</td>-->
<!--            <td>添加</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>三级分类</td>-->
<!--            <td>->->项目</td>-->
<!--            <td>添加</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>一级分类</td>-->
<!--            <td>项目</td>-->
<!--            <td>添加</td>-->
<!--        </tr>-->
<!--    </table>-->
    <?php } else { ?>
    <table>
        <tr>
            <td>没有数据</td>
        </tr>
    </table>
    <?php }?>
</div>
<style>
    .panel{
        width: 50%;height: 50%;
        background: #fff;
        box-shadow: 0 0 3px rebeccapurple;
        position:fixed;
        left: 0;right:0;top: 20%;margin: auto;
        z-index: 1;
        display: none;
    }
</style>
<div class="panel addpanel">
    <div class="close">
        x
    </div>
    <form action="/mvc2/index.php/admin/category/add" method="post" >
        <input type="text" name="cname"><br>
        <input type="hidden" name="cid"><br>
        <select name="isshow" id="">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模版"><br>
        栏目描述：<textarea name="info"></textarea>
        <input type="submit" value="提交">
    </form>
</div>
<div class="panel editpanel">
    <div class="close ">
        x
    </div>
    <form action="/mvc2/index.php/admin/category/add" method="post" >
        <input type="text" name="cname">
        <select name="pid" id="opts">

        </select>
        <select name="isshow" id="isshow">
            <option value="1">在导航可见</option>
            <option value="0">在导航不可见</option>
        </select><br>
        <input type="text" name="tpl_name" placeholder="输入对应的模版"><br>
        栏目描述：<textarea name="info" ></textarea>

        <input type="hidden" name="imgurl" id="imgurl">

        <div class="editupload">

        </div>
        <input type="button" value="修改">
    </form>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
category.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var uploadObj=new upload();

    uploadObj.createView({
        parent:document.querySelector(".editupload")
    })
    uploadObj.selectBtn.parentNode.style.lineHeight="50px";
    uploadObj.upBtn.style.lineHeight="50px";
    uploadObj.up("/mvc2/index.php/admin/category/uploadfile",function (e) {
        // $("input[type=hidden]").val(e[0]);
        $("#imgurl").val(e[0]);
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
