function getReportData(pid) {
	$.ajax({
		url:'http://localhost/final/home/Report/reportMonthlySale',
		method:'POST',
		dataType:'json',
		data:{productID:pid||1},
		success:function(data) {
			var salesData = [];
			var totalMoneyData = [];
			var avgPriceData = [];
			var monthList = [];

			for (var i = 0; i < data.length; i++) {
				salesData[i] = parseInt(data[i].totalnum);
				totalMoneyData[i] = parseInt(data[i].totalmoney);
				avgPriceData[i] = parseInt(data[i].avgprice);
				monthList[i] = data[i].month;
			}
			showSales(monthList,data[0].pname,salesData,pid);
			showTotalMoney(monthList,data[0].pname,totalMoneyData);
			showAvgPrice(monthList,data[0].pname,avgPriceData);
		}
	});
}
/*function getReportYear() {
	$.ajax({
		url:'http://localhost/final/home/Report/getReportYear',
		method:'POST',
		dataType:'json',
		success:function(data) {
			$('#report-year').html('');
			var options = '';
			$.each(data,function(index,item) {
				options = options + '<option>' + item.year +'</option>';
			});
			$('#report-year').on('change',function() {
				getReportData(currentPid,$(this).val());
			});
			$('#report-year').html(options);
		}
	});
}*/