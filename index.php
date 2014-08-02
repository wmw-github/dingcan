<?php
//单入口模式
define('THINK_PATH', './inc/');//thinkphp所在目录
define('APP_NAME', 'web');//应用名称
define('APP_PATH', './web/');//应用目录
define('RUNTIME_PATH', './data/');//运行缓存目录
define('TMPL_PATH', './templates/');//模板目录
//开启调试模式
define('APP_DEBUG', 'true');
require(THINK_PATH."/ThinkPHP.php");



?>