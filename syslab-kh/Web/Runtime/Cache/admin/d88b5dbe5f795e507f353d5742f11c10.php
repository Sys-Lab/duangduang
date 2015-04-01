<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src="/syslab-kh/web/Public/Js/jquery-1.11.2.min.js"></script>
	<script src="/syslab-kh/web/Public/Js/index.js"></script>
	<script src="/syslab-kh/web/Public/Js/bootstrap.min.js"></script>	
	<link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/public.css">
	<link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/index.css">
</head>
<body>
	<table class="table">
		<tr>
			<th>用户</th>
			<th>评论内容</th>
			<th>发布时间</th>
			<th>删除</th>
		</tr>
		<?php if(is_array($content)): foreach($content as $key=>$v): ?><tr>
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["content"]); ?></td>
			<td><?php echo ($v["time"]); ?></td>
			<td>
				<a href="<?php echo U('Admin/MsgManage/delete',array('id' => $v['id']));?>">删除评论</a>
			</td>
		</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan="4" align="center">
			<?php echo ($page); ?>
				
			</td>
			
		</tr>
 
	</table>
	</body>
</html>