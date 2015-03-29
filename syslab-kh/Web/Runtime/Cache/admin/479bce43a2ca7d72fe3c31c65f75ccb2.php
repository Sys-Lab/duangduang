<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo U('Admin/ChangePassword/change');?>">
		旧密码:  <input type="password" name="old"><br>
		新密码:  <input type="password" name="new1"><br>
		再一次:  <input type="password" name="new2"><br>
		<input type="submit">
	</form>

</body>
</html>