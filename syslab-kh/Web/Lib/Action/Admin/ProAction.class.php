<?php
class ProAction extends Action{

	public function index(){
		$this->display();
	}

	public function add(){
		$data = array(
			'name' => I('name'),
			'content' => I('content'),
			'time' => I('time'),
			'leader' => I('leader'),
			'number' => I('number'),
			);

		if(M('pro')->add($data)){
			$this->success('项目发布成功啦');
		}
	}
}



?>