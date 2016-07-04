(function($) {
	$(document).ready(function() {
		$('#ShowProducts,#AddProducts,#ReportSales,#Logs,#Employees,#Customers,#Suppliers').bind('click',function() {
			$('.body-main').hide();
			$('.pannel-header').show();
			$('.pannel-body').show();
		});
		$('#ShowProducts').bind('click',function() {
			getProductsData();
			$('#body-product-show').show();
		});
		$('#AddProducts').bind('click',function() {
			getSupplierIdList();
			$('#body-product-add').show();
		});
		$('#ReportSales').bind('click',function() {
			getReportData();
			$('#body-report').show();			
		});
		$('#Logs').bind('click',function() {
			getLogsData();
			$('#body-logs').show();
		});
		$('#Employees').bind('click',function() {
			getEmployeeTable();
			$('#body-employees').show();
		});
		$('#Customers').bind('click',function() {
			getCustomerTable();
			$('#body-customers').show();
		});
		$('#Suppliers').bind('click',function() {
			showSupplierTable();
			$('#body-suppliers').show();
		});

	// 为面板按钮添加点击事件
	$('.pannel-header-closeBtn').bind('click',function() {
		$(this).parent().parent().hide();
		$(this).parent().parent().next().hide();
	});
	$('.pannel-header-slide').bind('click',function() {
		$(this).parent().parent().next().slideToggle('fast');
	});
	$('.addProduct-form-input input').on('blur',function() {
		var input = $(this);
		var copy = input.clone();
		var parent = $(this).parent();
		if(input.val()){
			parent.html('');
			parent.append(copy);
			parent.append(
				'<span class="addProduct-form-stat-succ">'
				+'<i class="fa fa-check"></i>accepted</span>');
		}else{
			input.next().remove();
			parent.append('<span class="addProduct-form-stat-wrong">'
				+'<i class="fa fa-close"></i>error</span>');
		}
	});
	$('.addProduct-form-submit').bind('click',function(e) {
		e.preventDefault();
		var opts = {
			name: $('#addProduct-name').val(),
			qoh: $('#addProduct-qoh').val(),
			qohThreshold:$('#addProduct-qohThreshold').val(),
			originalPrice:$('#addProduct-originalPrice').val(),
			discntRate:$('#addProduct-discntRate').val(),
			suppliersID:$('#addProduct-supplierID').val().split('(')[0]
		};
		console.log(opts)
		addProduct(opts);
	});
	$('#ShowProducts').click();
});
})(jQuery);