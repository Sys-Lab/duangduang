<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<script type="text/javascript" src="__PUBLIC__/Js/login.js"></script>
	<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		var verifyURL = '<?php echo U("Admin/Login/verify",'','');?>';
	</script>
</head>
<body>
	<tr>
		<th>验证码:</th>
		<td>
			<input type="code" class="len250" name="code"/><img src="<?php echo u('Admin/Login/verify');?>"/><a href="javascript:void(change_code(this))">diandiandian</a>
		</td>
	</tr>
</body>

</html>