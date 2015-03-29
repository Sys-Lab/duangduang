<?php if (!defined('THINK_PATH')) exit();?><html>
<head lang="en"> 
	<meta charset="UTF-8">
	<title>This is login page!</title>
	<script src="/syslab-kh/web/Public/Js/jquery-1.11.2.min.js"></script>
	<script src="/syslab-kh/web/Public/Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/Login_join.css">
	<link href="/syslab-kh/web/Public/css/bootstrap.min.css" rel="stylesheet">
	<script>
		var verifyURL = "<?php echo U('Admin/Login/verify','','');?>";
		function change_code(){
			document.getElementById("code").setAttribute("src",verifyURL +'/' + Math.random());
			return false;
		}
	</script>

	
	
</head>
<body>


	<div class="well" id="d4">
	<nav class="navbar" id="n1">
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
			</nav>


			<form id="d1" method="POST" action="<?php echo U('Admin/Login/login','','');?>">
				<div class="form-group">
					<label>Your name</label></br>
					<input type="text"  id="name"  name="name">
				</div>
				<div class="form-group">
					<label>Password</label></br>
					<input type="password" id="pwd" name="password">
				</div>
				<div class="form-group">

					<label>Code</label></br>

					<input type="code" class="len250" name="code1"/><img src="<?php echo U('Admin/Login/verify');?>" id="code"/> <a href="javascript:void(change_code(this));" id="a2">看不清</a>



				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="check" > Agree us rules
					</label>
				</div>


				<div id="id3"><input type="submit" class="btn btn-primary" id="btn1" value="Submit">
				</div>
				<button id="btn233" class="btn btn-default" >Back</button>



			</form>


		</div>

	</body>
	<script>
		var url = "<?php echo U('Index/Index/index');?>";
		$("#btn233").click(function(e){
			window.open(url);


		})
	</script>

	</html>