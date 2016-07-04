function showSales(month,name,data,pid) {
	var title = {
		text: 'Sales Report'   
	};
	var subtitle = {
		text: 'Current Product id: '+ pid+' Hover to view data'
	};
	var xAxis = {
		categories: month
	};
	var yAxis = {
		title: {
			text: 'Quantity (\piece)'
		},
		plotLines: [{
			value: 0,
			width: 1,
			color: '#808080'
		}]
	};   

	var tooltip = {
		valueSuffix: '\piece'
	}

	var legend = {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle',
		borderWidth: 0
	};

	var series =  [
	{
		name: name,
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
	console.log(data);
	$('.report-sales').highcharts(json);
}
function showAvgPrice(month,name,data) {
	var title = {
		text: 'Average Price'   
	};
	var subtitle = {
		text: 'Current Product id: 8 Hover to view data'
	};
	var xAxis = {
		categories: month
	};
	var yAxis = {
		title: {
			text: 'avgPrice (\ yuan)'
		},
		plotLines: [{
			value: 0,
			width: 1,
			color: '#808080'
		}]
	};   

	var tooltip = {
		valueSuffix: '\ yuan'
	}

	var legend = {
		layout: 'vertical',
		align: 'right',
		verticalAlign: 'middle',
		borderWidth: 0
	};

	var series =  [
	{
		name: name,
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
	console.log(data);
	$('.report-avgPrice').highcharts(json);
}
function showTotalMoney(month,name,data) {
	var chart = {
		type: 'column'
	};
	var title = {
      text: ''//Total monthly amount
  };
  var subtitle = {
      text: ''//Current Product id: 8 Hover to view data
  };
  var xAxis = {
  	categories: month,
  	title: {
  		text: null
  	},
  	labels:{
  		enabled:false
  	}
  };
  var yAxis = {
  	min: 0,
  	title: {
         text: '',//Money (yuan)
         align: 'high'
     },
     labels: {
     	overflow: 'justify'
     },
     labels:{
  		enabled:false
  	}
 };
 var tooltip = {
 	valueSuffix: 'yuan'
 };
 var plotOptions = {
 	bar: {
 		dataLabels: {
 			enabled: false
 		}
 	}
 };
 var legend = {
 	enabled:false,
 	layout: 'vertical',
 	align: 'right',
 	verticalAlign: 'top',
 	x: -40,
 	y: 100,
 	floating: true,
 	borderWidth: 1,
 	backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
 	shadow: true
 };
 var credits = {
 	enabled: false //右下角highCharts链接
 };

 var series= [{
 	name: name,
 	data: data
 }
 ];     

 var json = {};   
 json.chart = chart; 
 json.title = title;
 json.subtitle = subtitle; 
 json.tooltip = tooltip;
 json.xAxis = xAxis;
 json.yAxis = yAxis;  
 json.series = series;
 json.plotOptions = plotOptions;
 json.legend = legend;
 json.credits = credits;
 $('.report-total-amount').highcharts(json);
}