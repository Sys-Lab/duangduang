<?php
	class NewsManageAction extends Action{

		public function index(){
			
			$this->display();
		}
		public function add(){
			$data = array(
				'title' => I('title'),
				'content' => I('content'),
				'time' => date('Y-m-d H:i:s'),

				);

			if(M('news')->add($data)){
				$this->success('删除成功啦');
			}
		}
	}



?>