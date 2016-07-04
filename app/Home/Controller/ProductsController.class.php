<?php 
namespace Home\Controller;
use Think\Controller\RestController;	
class ProductsController extends RestController{
		protected $allowMethod = array('GET','POST');//允许的请求类型
		public function showProducts()
		{
			$data = D()->query('call show_products()');
			$this->ajaxReturn($data);
			// $this->response($data,'json');
		}
		public function addProducts()
		{
			$opts = $_POST["opts"];
			$opts['name'] = "'".$opts['name']."'";
			$sql = "call add_product(";
			foreach ($opts as $value) {
				$sql=$sql.$value.',';
			}
			$sql = substr($sql,0,-1);
			$sql.=')';
			$data = D()->execute($sql);
			if($data){
				echo json_encode(array('success'=>true));
			}else{
				echo json_encode(array('success'=>false));
			}
		}
		public function getProductById()
		{
			$id = $_POST["pid"];
			$data = M('products')->where("pid=".$id)->select();
			echo json_encode($data);
		}
		public function products()
		{
			$this->display();
		}
	}
