<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml">  
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></meta>
	<title>留言列表 -- HoverTree</title>  
	<style>  
		.yhtable {  
			width: 800px;  
		}  

		.yhtable table, td, th {  
			border: 1px solid green;margin-top:10px;  
		}  
		.yh1 {width:100px;text-align:right;  
		}  
		.yh2 {  
			width:500px}  

		</style>  

	</head>  
	<body> 

		<div style="margin:0px auto;" class="yhtable"><h2>评论与交流</h2>  
			<a href="<?php echo U('Index/NewsManage/index');?>"> 返回</a>

			<?php if(is_array($content)): foreach($content as $key=>$v): ?><table>  

					<tr><td class="yh1">留言时间：</td><td class="yh2"><?php echo ($v["time"]); ?></td></tr>  
					<tr><td class="yh1">留言人：</td><td class ="yh2"><?php echo ($v["name"]); ?></td></tr>   
					
					<tr><td class="yh1">内容：</td><td class ="yh2"><?php echo ($v["content"]); ?></td></tr>  
					
				</table><?php endforeach; endif; ?>
			<?php echo ($page); ?> 



		</div>  

		<div style="width:800px;margin:10px auto;font-family:Arial, Helvetica, sans-serif;text-align:center;">SYSLAB2015</div> 
	</body>  
	</html>