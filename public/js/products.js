function getProductsData() {
	$.ajax({
		url:'http://localhost/final/home/Products/showProducts',
		method:'POST',
		dataType:'json',
		success:function(data) {
			showProducts(data);
		},
		complete:function() {
			$('.product-img').bind('click',function() {
				$.ajax({
					url:'http://localhost/final/home/Products/getProductById',
					method:'POST',
					dataType:'json',
					data:{pid:$(this).data('id')},
					success:function(data) {
						var item = data[0];
						$('.product-detail-img').attr('src','/final/public/img/products_imgs/'+item.p_img);
						$('.product-detail-name span').text(item.pname);
						$('.product-detail-desc span').text(item.p_descri);
						$('.product-detail-salary span').text(item.qoh);
						$('.product-detail-discnt span').text(item.discnt_rate);
						$('.product-detail-price span').text(item.original_price);
						$('.product-detail').fadeIn();
						$('.mask').show();

						$('.product-detail-report').click(function() {
							$('.product-detail-closeBtn').click();
							$('.body-main').hide();
							getReportData(item.pid);
							$('#body-report').show();
						});
						$('#product-detail-purchases').unbind('click').click(function() {
							addPurchases(item.pid,$('#purchase-customerID').val().split('(')[0],$('#purchase-employeeID').val().split('(')[0],$('#purchase-num').val());
						});
					},
					complete:function() {
						$('.product-detail-closeBtn').click(function() {
							$('.product-detail').hide();
							$('.mask').hide();
						});
						getCustomerIdList();
						getEmployeeIdList();
					}
				});
			});
		}
	});
};

function showProducts(data) {
	var productList = $('.product-list');
	var $productItem = $('.product-item').first();
	productList.html('');
	$.each(data,function(index,item) {
		var productItem = $productItem.clone();
		productItem.find('.product-img')
		.attr('src','/final/public/img/products_imgs/'+item.p_img)
		.attr('data-id',item.pid);
		productItem.find('figcaption').text(item.pname);
		productList.append(productItem);
	});
}

function addProduct(opts) {
	$.ajax({
		url:'http://localhost/final/home/Products/addProducts',
		method:'POST',
		dataType:'json',
		data:{opts:opts},
		success:function(data) {
			if(data.success == true){
				$('.purchase-stat').html('<p>添加成功</p>');
			}else{
				$('.purchase-stat').html('<p>添加失败</p>');
			}
			$('.mask').show();
			$('.purchase-stat').animate({
				'width':'300px',
				'height':'100px',
				'opacity':'1'
			},300,function() {
				setTimeout(function() {
					$('.purchase-stat').animate({
						'width':'0',
						'height':'0',
						'opacity':'0'
					},300,function() {
						$('.mask').hide();
					});
				},1000);
			});
		}
	});
}