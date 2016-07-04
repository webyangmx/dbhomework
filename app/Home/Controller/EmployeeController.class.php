<?php 
namespace Home\Controller;
use Think\Controller\RestController;	
class EmployeeController extends RestController{
	protected $allowMethod = array('GET','POST');//允许的请求类型
	public function showEmployee()
	{
		$data = M('employees')->select();
		$this->ajaxReturn($data);
		// $this->response($data,'json');
	}
}
