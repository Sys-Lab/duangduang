<?php

	/*
		首页视图
	*/
	class IndexAction extends Action{
		
		Public function index(){
			$this->display();
			//$us=M('user')->select();
			//$this->assign('user',$us)->display();
			
		}

	/*
		异步提交
		
	*/
		Public function handle(){


		}
	}

?>