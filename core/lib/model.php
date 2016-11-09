<?php
	namespace core\lib;
	use core\config;
	class model extends \PDO
	{
		public function __CONSTRUCT()
		{
			$database = conf::all('database');
			try{
				parent::__CONSTRUCT($database['DSN'],$database['USERNAME'],$database['PASSWORD']);
			}catch(\PDOException $e){
				p($e->getMessage());
			}

		}



	}