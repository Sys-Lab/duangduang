<?php

	class ChangePasswordAction extends Action{

		public function index(){

			$this->display();
		}

		public function change(){
			$old  = I('old','','md5');
			$new1 = I('new1','','md5');
			$new2 = I('new2','','md5');
			$name = $_SESSION['username'];
			$pass = M('user')->where(array('username'=>$name))->find();
			
			if($old!=$pass['password']){
				$this->error('旧密码错了哦');
			}
			if($new1!=$new2){
				$this->error('两次输入不一样哦');
			}
			if($old!=$pass['password']&&$new1!=$new2){
				$this->error('别捣乱，全输错了2333');
			}
			$data = array(
				'password' => $new1,				
			);
			M('user')->where(array('id'=>$pass['id']))->save($data);

			$this->redirect('Admin/Login/index','','');
		}
	}
?>