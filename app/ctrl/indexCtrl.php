<?php
	namespace app\ctrl;
	class indexCtrl extends \core\imooc
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

		public function view()
		{
			$data = 'hello world,this is view page';
			$this->assign('data',$data);
			$this->display('view.html');
		}	



	}