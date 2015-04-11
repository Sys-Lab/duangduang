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
		<form method="POST" action="<?php echo U('Admin/NewsManage/add');?>" id="f1">
		 新闻标题:  <input type="text" name="title" style="width:500px;height:30px;font-size:20px;"></br>
		 
		 新闻内容:  <textarea type="text" name="content" id="content" style="width:600px;height:400px;font-size:20px;margin-top:30px;"></textarea>
		 </br>
		 <input type="submit" name="sub" style="width:50px">
		</tr>
		 
		</form>
		
	</div>

</body>
</html>