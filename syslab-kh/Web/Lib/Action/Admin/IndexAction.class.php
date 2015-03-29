<?php
	/**
	* 这是后台首页控制器
	*/
	class IndexAction extends CommonAction{
		
		Public function index(){
			$this->display();
		}
		public function logout(){

			session_unset();
			session_destroy();
			$this->redirect('Admin/Login/join');
		}
	}
?>