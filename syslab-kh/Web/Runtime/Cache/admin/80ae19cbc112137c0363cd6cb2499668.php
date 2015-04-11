<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	
</head>
<body>
	<div id="p1">
		<p>Name: <?php echo ($data["username"]); ?></p>
		<p>Time: <?php echo ($data["time"]); ?></p>
		<p>Ip:  <?php echo ($data["ip"]); ?></p>
		<p>Host:  <?php echo ($data["browser"]); ?></p>
		<p>Language:  <?php echo ($data["la"]); ?></p>
	</div>
</body>
</html>