<?php
//mvc 架构
//model  view controller
//用来记录一个口令
session_start();//开启session，写一个凭证 在这之前不能有输出
define("MVC","true");
define("APP_DIR_NAME","application");
//应用文件夹
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);

require_once "libs/start.php";





