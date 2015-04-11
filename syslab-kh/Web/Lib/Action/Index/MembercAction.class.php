<?php

class MembercAction extends Action{
	public function c(){
		$id = $_GET['id'];
		$data = M('member')->where(array('id' => $id))->find();
		$this->assign('data',$data);
		$this->display();
	}
}

?>