<?php
	namespace core\lib;
	class conf
	{
		public static $conf = array(); 
		public static function get($name,$file)
		{
			/*
			*	1.判断配置文件是否存在
			*	2.判断配置是否存在
			*	3.缓存配置
			*/
			$file = IMOOC.'/core/config/'.$file.'.php';
			if(isset(self::$conf[$file])){
				return self::$conf[$file][$name];
			}
			if(is_file($file)){
				$conf = include $file;
				if(isset($name)){
					self::$conf[$file] = $conf;
					return $conf[$name]; 
				}else{
					throw new Exception("没有这个配置项".$name);
				}
			}else{
				throw new Exception("找不到配置文件".$file);
			}
		}
		//加载整个配置文件
		public static function all($file){
			$file = IMOOC.'/core/config/'.$file.'.php';

			if(isset(self::$conf[$file])){
				return self::$conf[$file][$name];
			}
			if(is_file($file)){
				$conf = include $file;
				self::$conf[$file] = $conf;
				return $conf;
			}else{
				throw new Exception("找不到配置文件".$file);
			}
		}

		//这是教程里面的，
		public static function getbk($name,$file)
		{
			/*
			*	1.判断配置文件是否存在
			*	2.判断配置是否存在
			*	3.缓存配置
			*/
			if(isset(self::$conf[$file])){
				return self::$conf[$file][$name];
			}
			$path = IMOOC.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				if(isset($name)){
					self::$conf[$file] = $conf;
					return $conf[$name]; 
				}else{
					throw new Exception("没有这个配置项".$name);
				}
			}else{
				throw new Exception("找不到配置文件".$file);
			}
		}
		
		//加载整个配置文件,教程的
		public static function allbk($file){
			if(isset(self::$conf[$file])){
				return self::$conf[$file][$name];
			}
			$path = IMOOC.'/core/config/'.$file.'.php';
			if(is_file($path)){
				$conf = include $path;
				self::$conf[$file] = $conf;
				return $conf;
			}else{
				throw new Exception("找不到配置文件".$file);
			}

		}

	}