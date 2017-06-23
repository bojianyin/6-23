<?php
	class IndexAction extends Action{
		Public function Index(){
			// echo C(XIAOBO);
			//p($_SERVER);
			//say();
			$this->display("index");
		}
		Public function handle(){
			if(!IS_AJAX) halt("页面不存在");
			$data=array(
				"use"=>I("username")
				,"pwd"=>I("pass")
			);
			if(M("log")->data($data)->add()){
				$this->ajaxReturn(array("status"=>"1"),'json');
			}else{
				$this->ajaxReturn(array("status"=>"0"),'json');
			}
		}
	}
?>