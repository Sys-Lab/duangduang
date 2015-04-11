<?php

	/**
	* 
	*/
	class NewsManageAction extends Action{
		
		public function index(){

			$data = M('news')->select();
			$this->assign('data',$data);

			$r = M('content')->select();
			$this->assign('remark',$r);

			$data1 =M('news')->where(array('id' => 1))->find();
			$this->assign('data1',$data1);


			$data3 =M('news')->where(array('id' => 3))->find();
			$this->assign('data3',$data3);


			$data4 =M('news')->where(array('id' => 4))->find();
			$this->assign('data4',$data4);

			$data5 =M('news')->where(array('id' => 5))->find();
			$this->assign('data5',$data5);

			$data2 =M('news')->where(array('id' => 2))->find();
			$this->assign('data2',$data2);


			 

			$p1 = M('pro')->where(array('id' => 1))->find();
		    $this->assign('p1',$p1);

		    $p2 = M('pro')->where(array('id' => 2))->find();
		    $this->assign('p2',$p2);

		    $p3 = M('pro')->where(array('id' => 3))->find();
		    $this->assign('p3',$p3);

		    $p4 = M('pro')->where(array('id' => 4))->find();
		    $this->assign('p4',$p4);
 
        import('ORG.Util.Page');
		$count = M('content')->count();
		$page = new Page($count,3);
		$limit = $page->firstRow .','. $page->listRows;

		$content = M('content')->order('id ASC')->limit($limit)->select();
		$this->content = $content;
		$this->page = $page->show(); 
		 
			$this->display();
			
		}

		public function cpage(){
			$id = $_GET['id'];


			$data = M('news')->where(array('id' => $id))->find();
			$this->assign('data',$data);
			$this->display();
		}

		public function handle(){
			$time = date('Y-m-d H:i:s');
			$data = array(
				'name' => I('name1','',''),
				'content' => I('content1','',''),
				'time' => $time,
				);


			if(M('content')->add($data)){
				$this->success('评论成功');
			}else{
				$this->error('然而评论并没有成功');
			}

		}

		public function pro(){
			$id = $_GET['id'];


			$data = M('pro')->where(array('id' => $id))->find();
			$this->assign('data',$data);
			$this->display();
		}
		public function remark(){
			import('ORG.Util.Page');
		$count = M('content')->count();
		$page = new Page($count,3);
		$limit = $page->firstRow .','. $page->listRows;

		$content = M('content')->order('id DESC')->limit($limit)->select();
		$this->content = $content;
		$this->page = $page->show(); 
		$this->display();
			// $data = M('content')->select();
			// $this->assign('data',$data);
			// $this->display();
		}

		public function show(){
			$this->display();
		}
	}

	?>