<?php if (!defined('THINK_PATH')) exit();?>	<html>  
<head lang="en"> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" initial-scale="1">
	<meta name="keyword" content="syslab">
	<meta name="description" content="syslab">
	<meta name="author" content="严涵">
	<title>主页</title>
	<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/login_one.css">
	<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/bootstrap.min.css">
	<script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/bootstrap.js"></script>
	<script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/login_one.js"></script>
	<script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/jquery-1.11.2.min.js"></script>
</head>
<body>

	<div class="bj">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo U('Index/Index/index');?>" id="sys">Sys-Lab</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<form id="form1" class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" id="se" class="form-control" placeholder="Search">

						</div>
						<button id="btn1" type="submit" class="btn btn-default">Submit</button>
						<button id="btn3" class="btn btn-primary">Administrator Login</button>

					</form>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!--<div onmouseover="MM_over(this)" onmouseout="MM_out(this)" >
			<font class="p" size=14>Syslab</font>
			<div class="top" >
				<div class="h1"><p><font color=blue size=14>Syslab</font></p></div>
				<div class="h2"><p><a href="<?php echo U('Admin/Login/join','','');?>">管理员登陆</a></p></div>
			</div>
		</div>-->
		<div class="bord">
			<div class="q" style="margin-left:10px"><a href="<?php echo U('Index/Index/membersw');?>"><img id="a" alt="图片A" src="/syslab-kh/Web/Tpl/Index/Public/images/2.png" onmouseover="showB(this)" onmouseout="showA(this)"></img></a></div>
			<div class="q" style="margin-left:75px"><a href="<?php echo U('Index/Index/about');?>"><img id="a" alt="图片c" src="/syslab-kh/Web/Tpl/Index/Public/images/4.png" onmouseover="showd(this)" onmouseout="showc(this)"></img></a></div>
			<div class="q" style="margin-left:75px"><a href="<?php echo U('Index/ResManage/index');?>"><img id="a" alt="图片e" src="/syslab-kh/Web/Tpl/Index/Public/images/6.png" onmouseover="showf(this)" onmouseout="showe(this)"></img></a></div>
			<div class="q" style="margin-left:75px"><a href="<?php echo U('Index/NewsManage/index');?>"><img id="a" alt="图片g" src="/syslab-kh/Web/Tpl/Index/Public/images/8.png" onmouseover="showh(this)" onmouseout="showg(this)"></img></a></div>
		</div>
	</div>
	<script>
		var url = "<?php echo U('Admin/Login/join');?>";
		$("#btn3").click(function(e){
			window.open(url);

		})
	</script>

</body>  

</html>