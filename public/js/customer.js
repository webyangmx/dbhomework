function getCustomerIdList() {
	$.ajax({
		url:'http://localhost/final/home/Customer/showCustomer',
		method:'POST',
		dataType:'json',
		success:function(data) {
			$('#purchase-customerID').html('');
			var options = '';
			$.each(data,function(index,item) {
				options = options + '<option>' + item.cid + ' (' + item.cname + ')</option>';
			});
			$('#purchase-customerID').html(options);
		}
	});
};
function getCustomerTable() {
	$.ajax({
		url:'http://localhost/final/home/Customer/showCustomer',
		method:'POST',
		dataType:'json',
		success:function(data) {
			var tbody = $('.customers-table tbody');
			$('.customers-table tbody').html('');
			$.each(data,function(index,item) {
				tbody.append(
					'<tr>'
					+'<td>'+item.cid+'</td>'
					+'<td>'+item.cname+'</td>'
					+'<td>'+item.city+'</td>'
					+'<td>'+item.visits_made+'</td>'
					+'<td>'+item.last_visit_time+'</td>'
					+'</tr>');
			});
		}
	});
}