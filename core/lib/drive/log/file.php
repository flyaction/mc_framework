<?php
	namespace core\lib\drive\log;
	use core\lib\conf;
	class file
	{
		public $path;//日志存储位置
		public function __CONSTRUCT()
		{
			$conf = conf::get('OPTION','log');
			$this->path = $conf['PATH'];

		}
		public function log($message,$file='log')
		{
			/**
			 * 1.确定文件存储位置是否存在,不存在则新建
			 * 2.写入位置
			 */
			if(!is_dir($this->path.date('YmdH'))){
				mkdir($this->path.date('YmdH'),0777,true);
			}
			$message = date('Y-m-d H:i:s').' '.json_encode($message);
			return  file_put_contents($this->path.date('YmdH').'/'.$file.'.php',$message.PHP_EOL,FILE_APPEND);
		}
	}
