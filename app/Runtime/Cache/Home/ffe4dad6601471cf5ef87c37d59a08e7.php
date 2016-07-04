<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	hello world
	<script src="//cdn.bootcss.com/jquery/1.12.2/jquery.min.js"></script>
	<script>
		var obj = {'a':'a','b':'b'};
		$.ajax({
			url:'/final/home/Purchase/add_purchase',
			method:'POST',
			dataType:'json',
			data:{data:obj},
			success:function(data) {
				console.log(data);
			}
		});
	</script>
</body>
</html>