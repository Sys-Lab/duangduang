<?php
	class MemberAction extends Action{
		public function index(){
		$m = M('member')->order("id ASC")->select();
		$this->assign('data',$m);
		$this->display();
	}

	public function change(){
		$id = I('id','','');
		$me = M('member')->where(array('id'=>$id))->find();
		$data = array(
			'content' => I('content','','')
			);
		if(M('member')->where(array('name' => $me['name']))->save($data)){	
			$this->success('更改成功!');

		}
	}

}

?>