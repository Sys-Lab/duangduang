<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/syslab-kh/Web/Public/Js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/syslab-kh/Web/Tpl/Admin/Public/Js/index_hd.js"></script>
<link rel="stylesheet" href="/syslab-kh/Web/Tpl/Admin/Public/css/public_hd.css" />
<link rel="stylesheet" href="/syslab-kh/Web/Tpl/Admin/Public/css/index_hd.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<title>后台管理</title>
<head>
</head>
<body>
	<div id="top">
	 <div id="ad1">
	 	<p><a href="<?php echo U('Admin/BasicMes/index');?>">Administration<br>Page</a></p>
	 </div>

		<div id="u">
		 
		<h1 id="h11">Hello! <?php echo ($name); ?></h1> 
		</div>
			<div class="exit">
				<a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出</a>
				<a href="<?php echo U('Index/Index/indextwo');?>" target="_blank">SysLab</a>
			</div>
		</div>
		<div id="left">
			<dl>
				<dt>评论管理</dt>
				<dd><a href="<?php echo U('Admin/MsgManage/index');?>">删除评论</a></dd>

			</dl>
			<dl>
				<dt>网站管理</dt>
				<dd><a href="<?php echo U('Admin/NewsManage/index');?>">发布新闻</a></dd>
				<dd><a href="<?php echo U('Admin/Pro/index');?>">发布项目</a></dd>
				<dd><a href="<?php echo U('Admin/Member/index');?>">修改成员信息</a></dd>


			</dl>
			<dl>
				<dt>帐号管理</dt>
				<dd><a href="<?php echo U('Admin/ChangePassword/index');?>">修改密码</a></dd>

			</dl>
		</div>
		 
		<div id="right">
			<iframe name="iframe" src="<?php echo U('Admin/BasicMes/index');?>"></iframe>
			 
		</div>


	</body>
	</html>