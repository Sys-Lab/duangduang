<?php if (!defined('THINK_PATH')) exit();?><html>  
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
<meta name="keyword" content="syslab"></meta>
<meta name="description" content="syslab"></meta>
<meta name="author" content="严涵"></meta>
<link rel="stylesheet" type="text/css" href="/syslab-kh/Web/Tpl/Index/Public/css/bootstrap.min.css">

<title>members</title>

<style>
* { padding: 0; margin: 0; } 
li { list-style: none; } 
body { background: #f9f9f9; font-size: 14px;  } 
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
     top: 10px;
     left:0px;
	background:url(/syslab-kh/Web/Tpl/Index/Public/images/news.png);
	width: 600px;
	height: 700px;        
	 }
</style>
 
<script type="text/javascript"> 
var oBtn = null; 
var oForm = null; 
var oText = null; 
var oTextarea = null; 
var timer = null; 
var speed = 0; 
var oLi = null 
var oH3 = null; 
var oP = null; 
window.onload = function() 
{ 
oBtn = document.getElementById("btn1"); 
oBtn.onclick = getValue; 
}; 
function getValue() 
{ 
document.getElementById("message_text").style.display = "block"; 
oForm = document.getElementsByTagName("form")[0]; 
oText = document.getElementById("text"); 
oTextarea = document.getElementsByTagName("textarea")[0]; 
oUl = document.getElementById("message_text").getElementsByTagName("ul")[0]; 
oForm.onsubmit = function(){ return false; }; 
if( oText.value == "" || oTextarea.value == "" ) 
{ 
alert("提交成功"); 
return; 
} 
oLi = document.createElement("li"); 
oH3 = document.createElement("h3"); 
oP = document.createElement("p"); 
oH3.innerHTML = oText.value; 
oP.innerHTML = oTextarea.value; 
if(oUl.childNodes[0]) 
{ 
oUl.insertBefore(oLi,oUl.childNodes[0]); 
} 
else 
{ 
oUl.appendChild(oLi); 
} 
oLi.appendChild(oH3); 
oLi.appendChild(oP); 
oText.value = ""; 
oTextarea.value = ""; 
var h = oLi.offsetHeight; 
oLi.style.height = '0px'; 
if(timer) 
{ 
clearInterval(timer); 
} 
timer = setInterval("goTime("+h+")", 35); 
goTime(h); 
} 
function goTime(target) 
{ 
var top = oLi.offsetHeight; 
speed += 3; 
top += speed; 
if(top > target) 
{ 
top = target; 
speed *= -0.7; 
} 
if(top===target && Math.abs(speed) < 3) 
{ 
clearInterval(timer); 
timer = null; 
oLi.style.height = target + "px"; 
} 
oLi.style.height = top + "px"; 
} 
</script> 
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
	<pre style="height:700px;">

		<h1 style="position: relative;top: -40px;left:170px;"><?php echo ($data["title"]); ?></h1>
		<h4 style="position: relative;top: -80px;left:300px;"><?php echo ($data["time"]); ?></h4>
		<p style="position: relative;top:-100px;left:10px;font-size:16px;"><?php echo ($data["content"]); ?></p>
</pre>
<div style="position:absolute;top:480px;left:0px;">
<div id="box" style="width:600px;"> 
<ul id="fill_in"> 

<form  action="<?php echo U('Index/NewsManage/handle');?>" method="POST" style=""> 
<li>姓名：<input id="text" type="text" class="text" name="name1" ></li>
<li>内容：<textarea id="content" style="width:380px; height:100px" name="content1"></textarea> </li>
<li><input  type="submit" value="提交" style="width:100px;height:30px;" ><a href="<?php echo U('Index/NewsManage/index');?>" style="margin-left:295px;">返回</a></li>
 

</form> 
  
</ul> 
<div id="message_text"> 
<h2>显示留言</h2> 
<ul></ul> 
</div> 
</div> 
</div>


	</div>
	</div>	
</body>
</html>