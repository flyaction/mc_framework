<?php
    /*
     *  入口文件
     */
 	define('IMOOC',realpath('./'));
 	define('CORE',IMOOC.'/core');
 	define('APP', IMOOC.'/app');
 	define('MODULE', 'app');
 	define('DEBUG',true);

 	include "vendor/autoload.php";

 	if(DEBUG == true){
 		// $whoops = new \Whoops\Run;
		// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
		// $whoops->register();

 		//自定义错误标题
		$whoops = new \Whoops\Run;
		$option = new \Whoops\Handler\PrettyPageHandler();
		$option->setPageTitle('框架出错了');
		$whoops->pushHandler($option);
		$whoops->register();

 		ini_set('display_errors','On');
 	}else{
 		ini_set('display_errors','Off');
 	}

 	//dump($_SERVER); //composer引入的symfony/var-dumper

 	include CORE.'/common/function.php';
 	include CORE.'/imooc.php';

 	spl_autoload_register('\core\imooc::load');
 	\core\imooc::run();
 	