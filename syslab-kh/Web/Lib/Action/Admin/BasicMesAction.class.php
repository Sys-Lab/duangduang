<?php

	class BasicMesAction extends Action{

		public function index(){
			$data = array(
				'username' => $_SESSION['username'],
				'time' => $_SESSION['time'],
				'ip' => $_SESSION['loginip'],
				'browser' => $_SERVER['HTTP_USER_AGENT'],
				'la' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
				);
			$this->assign('data',$data);
			$this->display();
		}

	}
?>