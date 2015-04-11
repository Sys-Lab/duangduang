<?php if (!defined('THINK_PATH')) exit();?><html>  
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
	<meta name="keyword" content="syslab"></meta>
	<meta name="description" content="syslab"></meta>
	<meta name="author" content="严涵"></meta>
	<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/bootstrap.min.css">
	<title>project</title>
	<style>
		* { padding: 0; margin: 0; } 
		li { list-style: none; } 
		body { background: #f9f9f9; font-size: 14px; } 
		#explain { height: 60px; border-bottom: 1px solid #999999; background: #eee; font-size: 14px; color: #666; text-align: 
			center; line-height: 60px; } 
			#explain a { color: #990000; font-weight: bold; text-decoration: none; border-bottom: 1px dotted #990000; } 
			#explain a:hover { border-bottom: 2px solid #990000; } 
			#explain strong { color: #990000; } 
			#box { width: 450px; padding: 10px; border: 1px solid #ccc; background: #f4f4f4; margin: 10px auto; } 
			#fill_in { margin-bottom: 10px; } 
			#fill_in li { padding: 5px 0; } 
			#fill_in .text { width: 380px; height: 30px; padding: 0 10px; border: 1px solid #ccc; line-height: 30px; font-size: 14px; 
				font-family: arial; } 
				#fill_in textarea { width: 380px; height: 100px; line-height: 20px; padding: 5px 10px; border: 1px solid #ccc; font-size: 
					14px; font-family: arial; overflow: auto; vertical-align: top; } 
					#fill_in .btn { border: none; width: 100px; height: 30px; border: 1px solid #ccc; background: #fff; color: #666; font-size: 
						14px; position: relative; left: 42px; } 
						#message_text { display: none; } 
						#message_text h2 { font-size: 14px; padding: 6px 0 4px 10px; background: #ddd; border-bottom: 1px solid #ccc; } 
						#message_text li { background: #f9f9f9; border-bottom: 1px solid #ccc; color: #666; overflow: hidden; } 
						#message_text h3 { padding: 10px; font-size: 14px; line-height: 24px; } 
						#message_text p { padding: 0 10px 10px; text-indent: 28px; line-height: 20px; } 
						a{TEXT-DECORATION:none}a:hover{TEXT-DECORATION:underline}
						body{
							margin:0 auto;

						}
						div {
							margin:0 auto;
						}
						.bj{background:url(/syslab-kh/Web/Tpl/Index/Public/images/bj2.png);
							width: 1600px;
							height: 800px;
						}
						.p1{
							position: relative;
							top: 70px;
							left:0px;
							background:url(/syslab-kh/Web/Tpl/Index/Public/images/news.png);
							width: 600px;
							height: 600px         }
						</style>
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
										<a class="navbar-brand" href="<?php echo U('Index/Index/indextwo');?>" id="sys">Sys-Lab</a>
									</div>

									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>
							<div class="p1">
								<h1 style="position: relative;top: 0px;left:180px;"><?php echo ($data["name"]); ?></h1>
								<p style="position: relative;top: 150px;left:22px;"><?php echo ($data["content"]); ?></p>
								<p style="position: relative;top: 400px;left:220px;">联系人：<?php echo ($data["leader"]); ?></p>
								<p style="position: relative;top: 450px;left:220px;">联系电话：<?php echo ($data["number"]); ?></p>





							</div>

						</div>	
					</body>
					</html>