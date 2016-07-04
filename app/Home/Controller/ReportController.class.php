<?php
	namespace Home\Controller;
	use Think\Controller\RestController;
	class ReportController extends RestController{
		public function reportMonthlySale()
		{
			$productID = $_POST["productID"];
			$sql = "call report_monthly_sale(".$productID.")";
			$data = D()-> query($sql);
			$this->ajaxReturn($data);
		}
		/*public function getReportYear()
		{
			$sql = 'select year(ptime) year from purchases group by year(ptime)';
			$data = D()-> query($sql);
			$this->ajaxReturn($data);
		}*/
	}