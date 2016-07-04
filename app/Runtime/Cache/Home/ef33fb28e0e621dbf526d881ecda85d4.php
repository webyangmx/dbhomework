<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="container" style="width: 550px; height: 400px; margin: 0 auto"></div>
	<script src="//cdn.bootcss.com/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script>

		// 显示商品
		/*$.ajax({
			url:'showProducts',
			method:'POST',
			dataType:'json',
			success:function(data) {
				console.log(data);
			}
		});*/

		//增加商品 
		/*var opts = {
			name:'pname3',
			qoh:50,
			qohThreshold:30,
			originalPrice:16,
			discntRate:0.75,
			suppliersID:3};
		$.ajax({
			url:'addProducts',
			method:'POST',
			dataType:'json',
			data:{opts:opts},
			success:function(data) {
				console.log(data);
			}
		});*/

		// 报告
		$.ajax({
			url:'reportMonthlySale',
			method:'POST',
			dataType:'json',
			data:{productID:8},
			success:function(data) {
				var tableData = [];
				var monthList = [];
				for (var i = 0; i < data.length; i++) {
					tableData[i] = parseInt(data[i].totalnum);
					monthList[i] = data[i].month;
				}
				showTable(monthList,tableData);
			}
		});
		function showTable(month,data) {
			var title = {
				text: '月平均气温'   
			};
			var subtitle = {
				text: 'Source: runoob.com'
			};
			var xAxis = {
				categories: month
			};
			var yAxis = {
				title: {
					text: 'Temperature (\xB0C)'
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			};   

			var tooltip = {
				valueSuffix: '\xB0C'
			}

			var legend = {
				layout: 'vertical',
				align: 'right',
				verticalAlign: 'middle',
				borderWidth: 0
			};

			var series =  [
			{
				name: 'Tokyo',
				data: data
			}
			];
			var json = {};

			json.title = title;
			json.subtitle = subtitle;
			json.xAxis = xAxis;
			json.yAxis = yAxis;
			json.tooltip = tooltip;
			json.legend = legend;
			json.series = series;

			$('#container').highcharts(json);
		}
	</script>
</body>
</html>