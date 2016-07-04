function getSupplierIdList() {
	$.ajax({
		url:'http://localhost/final/home/Supplier/showSuppliers',
		method:'POST',
		dataType:'json',
		success:function(data) {
			$('#addProduct-supplierID').html('');
			var options = '';
			$.each(data,function(index,item) {
				options = options + '<option>' + item.sid + ' (' + item.sname + ')</option>';
			});
			$('#addProduct-supplierID').html(options);
		}
	});
}
function showSupplierTable() {
	$.ajax({
		url:'http://localhost/final/home/Supplier/showSuppliers',
		method:'POST',
		dataType:'json',
		success:function(data) {
			var tbody = $('.suppliers-table tbody');
			$('.suppliers-table tbody').html('');
			$.each(data,function(index,item) {
				tbody.append(
					'<tr>'
					+'<td>'+item.sid+'</td>'
					+'<td>'+item.sname+'</td>'
					+'<td>'+item.city+'</td>'
					+'<td>'+item.telephone_no+'</td>'
					+'</tr>');
			});
		}
	});
}