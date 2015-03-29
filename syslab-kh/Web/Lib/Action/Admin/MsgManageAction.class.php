<?php

class MsgManageAction extends Action{

	public function index(){
		import('ORG.Util.Page');
		$count = M('content')->count();
		$page = new Page($count,10);
		$limit = $page->firstRow .','. $page->listRows;

		$content = M('content')->order('time DESC')->limit($limit)->select();
		$this->content = $content;
		$this->page = $page->show(); 
		$this->display();
	}
	public function delete(){

		$id=I('id','','intval');
		if(M('content')->where(array('id' => $id))->delete()){
			$this->success('success');
		}else{
			$this->error('fail');
		}
	}
}

?>