<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<h3>有这些话成员，你要修改哪个:</h3>
	<?php if(is_array($data)): foreach($data as $key=>$v): ?><h3><?php echo ($v["id"]); ?>: <?php echo ($v["name"]); ?>: <?php echo ($v["sex"]); ?></h3><?php endforeach; endif; ?>
	</div>
<div>
	<form method="POST" action="<?php echo U('Admin/Member/change');?>">
		ID:   <input type="text" name="id"></br>
		内容:  <textarea name="content" style="width:400px;height:400px;font-size:20px;margin-top:20px;"></textarea>	
		<input type="submit">	
	</form>
	</div>
</body>
</html>