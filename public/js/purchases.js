function addPurchases(pid,cid,eid,purqty) {
	var opts = {
		cid:cid,
		eid:eid,
		pid:pid,
		purqty:purqty,
	};
	console.log(opts);
	$.ajax({
		url:'http://localhost/final/home/purchases/addPurchases',
		method:'POST',
		dataType:'json',
		data:{opts:opts},
		success:function(data) {
			var purchaseStat = $('.purchase-stat');
			purchaseStat.html('');
			if(data.success == true){
				var inventoryData = data.inventoryData;
				if(inventoryData && inventoryData.length != 0){
					purchaseStat.html(
						'<p>购买成功</p>'
						+'<p>inventory:'+inventoryData[0].inventory+'</p>'
						+'<p>inventory + pur_qty:'+inventoryData[0].inventory_pur_qty+'</p>'
						+'<p>库存增加两倍</p>');
				}else{
					purchaseStat.html('<p>购买成功</p>');
				}
			}else{
				purchaseStat.html('<p>购买失败</p><p>库存不足</p>');
			};
			$('.purchase-stat').animate({
				'width':'400px',
				'height':'200px',
				'opacity':'1'
			},300,function() {
				setTimeout(function() {
					$('.purchase-stat').animate({
						'width':'0',
						'height':'0',
						'opacity':'0'
					},300,function() {
						$('.product-detail-closeBtn').click();
					});
				},1000);
			});
		}
	});
}