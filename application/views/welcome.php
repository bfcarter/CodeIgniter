<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Login </title>
</head>
<body>
	Welcome<?php echo $this->session->userdata('username')?>
	<br>
	<?php echo anchor('login/logout','Logout');?>
	
</body>
</html>