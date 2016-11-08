<?php 
	namespace core\lib;
	class route
	{
		public $ctrl;
		public $action; 
		public function __CONSTRUCT()
		{
			/**
			* 1.隐藏index.php
			* 2.获取url参数部分
			* 3.返回对应控制器和方法
			*/
			//p($_GET);
			//p($_SERVER);die;
			if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/')
			{
				//处理掉index.php
				$request_uri_arr =  explode('/',trim($_SERVER['REQUEST_URI'],'/'));
				if(strpos($request_uri_arr[0],'.php')){
					unset($request_uri_arr[0]);
					$request_uri_arr = array_values($request_uri_arr);
				}
				if(isset($request_uri_arr[0])){
					$this->ctrl = $request_uri_arr[0];
					unset($request_uri_arr[0]); //去除掉控制器
					if(isset($request_uri_arr[1])){
						$this->action = $request_uri_arr[1];
						unset($request_uri_arr[1]);//去除掉控制器方法
					}else{
						$this->action = 'index';
					}
					
					$count = count($request_uri_arr) + 2;
					$i = 2;
					unset($_GET);
					while($i < $count){
						if(isset($request_uri_arr[$i+1])){
							$_GET[$request_uri_arr[$i]] = $request_uri_arr[$i+1];
						}
						$i = $i + 2;
					}
					
				}else{
					$this->ctrl = 'index';
					$this->action = 'index';
				}
				
			}else{
				$this->ctrl = 'index';
				$this->action = 'index';
			}
		}
		
	}