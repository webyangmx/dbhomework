function getEmployeeIdList() {
	$.ajax({
		url:'http://localhost/final/home/Employee/showEmployee',
		method:'POST',
		dataType:'json',
		success:function(data) {
			$('#purchase-employeeID').html('');
			var options = '';
			$.each(data,function(index,item) {
				options = options + '<option>' + item.eid + ' (' + item.ename+ ')</option>';
			});
			$('#purchase-employeeID').html(options);
		}
	});
};
function getEmployeeTable() {
	$.ajax({
		url:'http://localhost/final/home/Employee/showEmployee',
		method:'POST',
		dataType:'json',
		success:function(data) {
			var logs = $('.section-employees');
			var tbody = $('.employees-table tbody');
			$('.employees-table tbody').html('');
			$.each(data,function(index,item) {
				tbody.append(
					'<tr>'
					+'<td>'+item.eid+'</td>'
					+'<td>'+item.ename+'</td>'
					+'<td>'+item.city+'</td>'
					+'</tr>');
			});
		}
	});
}