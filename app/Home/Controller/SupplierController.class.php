<?php 
namespace Home\Controller;
use Think\Controller\RestController;	
class SupplierController extends RestController{
	protected $allowMethod = array('GET','POST');//允许的请求类型
	public function showSuppliers()
	{
		$data = M('suppliers')->select();
		$this->ajaxReturn($data);
		// $this->response($data,'json');
	}
}
