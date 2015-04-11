<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>members</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/box.css" media="all" />
	<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/bootstrap.min.css">
	<script type="text/javascript" src="/syslab-kh/Web/Tpl/Index/Public/js/jquery-1.11.1.min.js"></script>
</head>
 
<body>

	<div class="bj" >
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
					<a class="navbar-brand" href="<?php echo U('Index/Index/indextwo');?>" id="sys">Sys-Lab</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<button id="btn11" class="btn btn-primary" style="margin-top:5px;width:70px;height:40px;">Home</button>
				<button id="btn22" class="btn btn-primary" style="margin-top:5px;width:70px;height:40px;margin-left:10px;">About</button>
				<button id="btn33" class="btn btn-primary" style="margin-top:5px;width:70px;height:40px;margin-left:10px;">News</button>
				<button id="btn44" class="btn btn-primary" style="margin-top:5px;width:70px;height:40px;margin-left:10px;">Join</button>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container" >

			<ul class="ca-menu">
				<li id="l1">
					<a href="<?php echo U('Index/Memberc/c?id=3');?>" >

						<div >
							<h2 class="ca-main">UI</h2>
							<h3 class="ca-sub" >jim</h3>
						</div>
					</a>                   
				</li>
			</ul>
		</div>
		<div class="container2" >

			<ul class="ca-menu">
				<li id="l2">
					<a href="<?php echo U('Index/Memberc/c?id=1');?>" >

						<div >
							<h2 class="ca-main">BE</h2>
							<h3 class="ca-sub" >TIM</h3>
						</div>
					</a>                   
				</li>
			</ul>
		</div>
		<div class="container3" >

			<ul class="ca-menu">
				<li id="l3">
					<a href="<?php echo U('Index/Memberc/c?id=2');?>" >

						<div >
							<h2 class="ca-main">FE</h2>
							<h3 class="ca-sub" >kevin</h3>
						</div>
					</a>                   
				</li>
			</ul>
		</div>
	</div>

	<script>
	var url1 = "<?php echo U('Index/Index/indextwo');?>";
	$("#btn11").click(function(e){
			window.open(url1);
		});
</script>
<script>
	var url2 = "<?php echo U('Index/Index/about');?>";
	$("#btn22").click(function(e){
			window.open(url2);
		});
</script>
<script>
	var url3 = "<?php echo U('Index/NewsManage/index');?>";
	$("#btn33").click(function(e){
			window.open(url3);
		});
</script>
<script>
	var url4 = "<?php echo U('Index/ResManage/index');?>";
	$("#btn44").click(function(e){
			window.open(url4);
		});
</script>
</body>
</html>