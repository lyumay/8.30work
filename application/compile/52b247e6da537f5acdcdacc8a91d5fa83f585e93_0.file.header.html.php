<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 12:18:39
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b991fa4b578_18430333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b247e6da537f5acdcdacc8a91d5fa83f585e93' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/header.html',
      1 => 1598789918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b991fa4b578_18430333 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/common.css">
<header>
    <div class="headerContent">
        <a href="/mvc2/index.php">
        <div class="logo"><img src="<?php echo IMG_ADD;?>
logo.png" alt=""></div>
        </a>
        <ul class="menu">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li>
                <a href="/mvc2/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                <ul class="son">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                    <li>
                        <a href="/mvc2/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                        </a>
                    </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <?php }?>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
        <div class="search">
            <div class="mall">
                <div>
                    <a href="https://mall.jd.com/index-623999.html">商城</a> </div>
                <div>EN</div>
            </div>
            <div class="input">
                <input type="text" placeholder="请输入搜索内容">
            </div>
        </div>
        <div class="login">
            <span><a href="/mvc2/application/template/index/login.html">登录</a></span>
            <span><a href="/mvc2/application/template/index/enroll.html">注册</a></span>
        </div>
    </div>
</header>


<!-- 浮动头部开始 -->
<div class="floatHeade">
    <div class="headerContent">
        <a href="/mvc2/index.php">
            <div class="logo"><img src="<?php echo IMG_ADD;?>
logo.png" alt=""></div>
        </a>
        <ul class="menu">
<!--            <li>-->
<!--                <a href="/mvc2/index.php"> 首页</a>-->
<!--            </li>-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li>
                <a href="/mvc2/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
        <div class="search">
            <div class="mall">
                <div> <a href="https://mall.jd.com/index-623999.html">商城</a></div>
                <div>EN</div>
            </div>
            <div class="input">
                <input type="text" placeholder="请输入搜索内容">
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index.js"><?php echo '</script'; ?>
>
<!-- 浮动头部结束 -->
<?php }
}
