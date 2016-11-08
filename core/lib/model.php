<?php
	namespace core\lib;
	class model extends \PDO
	{
		public function __CONSTRUCT()
		{
			$dsn = 'mysql:host=localhost;dbname=imoockj';
			$username = 'root';
			$password = '123';
			try{
				parent::__CONSTRUCT($dsn,$username,$password);
			}catch(\PDOException $e){
				p($e->getMessage());
			}

		}



	}