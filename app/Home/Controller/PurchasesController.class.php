<?php
namespace Home\Controller;
use Think\Controller\RestController;
class PurchasesController extends RestController{
	public function addPurchases()
	{
		$opts = $_POST["opts"];

		$where['pid'] = $opts['pid'];
		$data = M('products')->where($where)->select();

		$sql = "call add_purchase(";
			foreach ($opts as $value) {
				$sql = $sql.$value.',';
			}
			$sql = substr($sql, 0,-1);
			$sql.=')';

		$qoh = $data[0]["qoh"];
		$qoh_threshold = $data[0]["qoh_threshold"];
		$purqty = $opts["purqty"];
		if($purqty > $qoh){
			$this->ajaxReturn(array(
				'success'=>false,
				'msg'=>'库存不足'
				));
		}else if($qoh-$purqty<$qoh_threshold){
			$data = D()->query($sql);
			if($data){
				echo json_encode(array(
					'success'=>true,
					'inventoryData'=>$data,
					'msg'=>'库存增加两倍'
					));
			}else{
				echo json_encode(array('success'=>false));
			}
		}else{
			$data = D()->execute($sql);
			if($data){
				echo json_encode(array(
					'success'=>true,
					'msg'=>'购买成功'
					));
			}else{
				echo json_encode(array('success'=>false));
			}
		}
	}
	public function purchases()
	{
		$this->display();
	}
}