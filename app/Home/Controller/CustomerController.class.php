<?php 
namespace Home\Controller;
use Think\Controller\RestController;	
class CustomerController extends RestController{
	protected $allowMethod = array('GET','POST');//允许的请求类型
	public function showCustomer()
	{
		$data = M('customers')->select();
		$this->ajaxReturn($data);
		// $this->response($data,'json');
	}
}
