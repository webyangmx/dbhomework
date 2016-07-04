function getLogsData() {
	$.ajax({
		url:'http://localhost/final/home/Logs/showLogs',
		method:'POST',
		dataType:'json',
		success:function(data) {
			showLogsTable(data);
		}
	});
};
function showLogsTable(data) {
	var logs = $('.section-logs');
	var tbody = $('.logs-table tbody');
	$('.logs-table tbody').html('');
	$.each(data,function(index,item) {
		tbody.append(
			'<tr>'
			+'<td>'+item.who+'</td>'
			+'<td>'+item.operation+'</td>'
			+'<td>'+item.time+'</td>'
			+'<td><span>'+item.table_name+'</span></td>'
			+'<td>'+item.key_value+'</td>'
			+'</tr>');
	});
};