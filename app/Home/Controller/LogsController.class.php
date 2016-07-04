<?php
	namespace Home\Controller;
	use Think\Controller;
	class LogsController extends Controller{
		public function showLogs()
		{
			$data = M('logs') -> select();
			$data = array_slice($data, -10,10);
			$this->ajaxReturn($data);
		}
	}