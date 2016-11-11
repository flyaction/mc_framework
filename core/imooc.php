<?php 
	namespace core;
	class imooc
	{
		public static $classMap = array();
		public $assign;

		public static function run()
		{
			\core\lib\log::init(); //初始化日志
			\core\lib\log::log($_SERVER,'server');//写入日志
			$route = new \core\lib\route();
			$ctrlClass = $route->ctrl;
			$action = $route->action;

			$ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
			$newCtrlclass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';

			if(is_file($ctrlFile)){
				include $ctrlFile;
				$ctrl = new $newCtrlclass();
				$ctrl->$action();
				\core\lib\log::log('ctrl:'.$ctrlClass.'  '.'action:'.$action);
			}else{
				throw new Exception("找不到控制器".$ctrlClass);
			}

		}
		public static function load($class)
		{
			//自动加载类库
			if(isset($classMap[$class])){
				return true;	
			}else{
				$class = str_replace('\\','/',$class);
				$file = IMOOC.'/'.$class.'.php';
				if(is_file($file)){
					include $file;
					self::$classMap[$class] = $class;
				}else{
					return false;
				}
			}
		}

		public function assign($name,$value)
		{	
			$this->assign[$name] = $value;
		}

		// public function display($file)
		// {
		// 	$file = APP.'/views/'.$file;
		// 	if(is_file($file)){
		// 		extract($this->assign);
		// 		include $file;
		// 	}
		// }
		public function display($file)
		{
			$path = APP.'/views/'.$file;
			if(is_file($path)){
				\Twig_Autoloader::register();
				$loader = new \Twig_Loader_Filesystem(APP.'/views');
				$twig = new \Twig_Environment($loader, array(
				    'cache' => IMOOC.'/cache',
				    'debug' => DEBUG
				));
				$template = $twig->loadTemplate($file);
				$template->display($this->assign?$this->assign:'');
			}
		}

	}