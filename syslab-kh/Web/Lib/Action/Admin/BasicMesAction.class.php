<?php

	class BasicMesAction extends Action{

		public function index(){
			$data = array(
				'username' => $_SESSION['username'],
				'time' => $_SESSION['time'],
				'ip' => $_SESSION['loginip'],
				);
			$this->assign('data',$data);
			$this->display();
		}

	}
?>