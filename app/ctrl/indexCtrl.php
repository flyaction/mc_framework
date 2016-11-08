<?php
	namespace app\ctrl;
	class indexCtrl
	{
		public function index()
		{	
			p('index-index');

		}

		public function model()
		{
			$model = new \core\lib\model();
			$sql = 'select * from language';
			$res = $model->query($sql);
			p($res->fetchAll());
		}



	}