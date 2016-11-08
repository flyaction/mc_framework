<?php
    /*
     *  入口文件
     */
 	define('IMOOC',realpath('./'));
 	define('CORE',IMOOC.'/core');
 	define('APP', IMOOC.'/app');
 	define('MODULE', 'app');

 	define('DEBUG',true);

 	if(DEBUG == true){
 		ini_set('display_errors','On');
 	}else{
 		ini_set('display_errors','Off');
 	}

 	include CORE.'/common/function.php';
 	include CORE.'/imooc.php';

 	spl_autoload_register('\core\imooc::load');
 	\core\imooc::run();
 	