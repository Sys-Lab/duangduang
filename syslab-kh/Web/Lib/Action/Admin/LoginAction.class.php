<?php 
//登录视图控制界面
Class LoginAction extends Action{
	public function index(){
		 
		
		$name = $_SESSION['username'];
		$this->assign('name',$name);

		$this->display();
	}
	public function join(){
		
		$this->display();
	}
	
	public function verify(){
		import('ORG.Util.Image');
		//ob_end_clean();
		image::buildImageVerify(4,5,'png',80,25);
	}
	public function login(){
		if(!IS_POST) _404('请先登录');
		if(I('code1','','md5')!= session('verify')){
			$this->error('验证码错误');
		}
		$username = I('name');
		$user = M('user')->where(array('username'=>$username))->find();
		$pwd = I('password','','md5');
		if(!$user||$user['password']!=$pwd){

			$this->error('然而你的帐号或密码并不正确');
		}

		$data = array(
			'id' => $user['id'],
			'time' => time(),
			'loginip' => get_client_ip(),	
			);
		M('user')->save($data);

		session('uid',$user['id']);
		session('username',$user['username']);
		session('time',date('Y-m-d H:i:s'),$user['time']);
		session('loginip',$user['loginip']);

		$this->redirect('Admin/Login/index');





	}
	public function add(){
		$data = array(
			'content' => $_POST['message'],

			);
		$content = M('content');
		$content->add($data);
		p($_POST);
		echo $_POST['message'];

	


	}
}