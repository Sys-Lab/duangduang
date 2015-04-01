<?php
class ResManageAction extends Action{
    Public function index(){
	$this->display();
}	
	public function handle(){
		$time = date('Y-m-d H:i:s');
		$data = array(
			'name' => I('name','','htmlspecialchars'),
			'sex' => I('sex','',''),
			'age' => I('age','','htmlspecialchars'),
			'number' => I('tel','',''),
			'habbit' => I('habbit','',''),
			'ex' => I('sunmery','',''),
			'major' => I('spe','',''),
			'time' => $time,
			);
		if(M('resume')->add($data)){
			$this->success('提交成功');
		}
	}
}

?>