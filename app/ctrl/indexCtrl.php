<?php
	namespace app\ctrl;
	use core\lib\model;
	class indexCtrl extends \core\imooc
	{
		public function index()
		{	
			
			p('index-index');

		}

		public function model()
		{
			$model = new \core\lib\model();
			$sql = 'select * from l';
			$res = $model->query($sql);
			p($res->fetchAll());
		}

		public function view()
		{
			$data = 'hello world,this is view page';
			$this->assign('data',$data);
			$this->display('view.html');
		}
		public function twig()
		{
			$data = 'hello world,this is twig page';
			$this->assign('data',$data);
			$this->display('twig.html');
		}
		public function twigs()
		{
			$data = 'hello world,this is twig page';
			$this->assign('data',$data);
			$this->display('twigs.html');
		}		

		public function conf()
		{
			$tmp1 = \core\lib\conf::get('CTRL','route');
			$tmp2 = \core\lib\conf::get('ACTION','route');
			p($tmp1);
			p($tmp2);	
		}

		public function medoo(){
			//http://medoo.lvtao.net/doc.php
			$model = new model();
			$datas = $model->select("l", [
    				"id",
    				"name"
			]);
			dump($datas);
		}
		public function medoos(){
			//http://medoo.lvtao.net/doc.php
			$model = new \app\model\lModel();
			//$ret = $model->lists();//多条
			$ret = $model->getOne(1);//单条
			dump($ret);
			
		}





	}