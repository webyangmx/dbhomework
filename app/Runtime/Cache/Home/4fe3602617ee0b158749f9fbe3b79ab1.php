<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script src="//cdn.bootcss.com/jquery/1.12.2/jquery.min.js"></script>
	<script>
		var opts = {
			cid:1,
			eid:1,
			pid:8,
			purqty:10,
		};
		$.ajax({
			url:'addPurchases',
			method:'POST',
			dataType:'json',
			data:{opts:opts},
			success:function(data) {
				console.log(data);
			}
		});
	</script>
</body>
</html>