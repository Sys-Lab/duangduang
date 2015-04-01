<?php

	/**
	* 
	*/
	class NewsManageAction extends Action{
		
		public function index(){
			$this->display();
			
		}

		public function cpage(){
			$id = $_GET['id'];


			$data = M('news')->where(array('id' => $id))->find();
			$this->assign('data',$data);
			$this->display();
		}

		public function handle(){
			$time = date('Y-m-d H:i:s');
			$data = array(
				'name' => I('name1','',''),
				'content' => I('content1','',''),
				'time' => $time,
				);


			if(M('content')->add($data)){
				$this->success('评论成功');
			}else{
				$this->error('然而评论并没有成功');
			}

		}
	}

	?>