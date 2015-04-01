<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="/syslab-kh/web/Public/Js/jquery-1.11.2.min.js"></script>
	<script src="/syslab-kh/web/Public/Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/Login_index.css">
</head>
<body>
	<div class="well" id="d1">
		<form method="POST" action="<?php echo U('Admin/NewsManage/add');?>">
		 新闻标题:  <input type="text" name="title"><br>
		 新闻内容:  <input type="text" name="content"><br>
		 <input type="submit" name="sub">
		</tr>
		 
		</form>
		
	</div>

</body>
</html>