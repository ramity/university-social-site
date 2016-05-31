<!DOCTYPE html>
	<head>
		<title>The new social network</title>
		<link type="text/css" rel="stylesheet" href="http://ramity.com/css/default.css">
		<link type="text/css" rel="stylesheet" href="http://ramity.com/css/topbar.css">
		<link type="text/css" rel="stylesheet" href="http://ramity.com/css/login.css">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>
		<?php require('/home/ramity/rwork/content/topbar.php');?>
		<div id="logincover">
			<div id="logincenter">
				<form id="loginbox">
					<div id="loginheader">
						Welcome back, brah.
					</div>
					<div class="loginlabel">Email</div>
					<input class="logininput" placeholder="email">
					<div class="loginlabel">Password</div>
					<input class="logininput" placeholder="password">
					<div class="loginlabel">Remember me</div>
					<select class="loginselect">
						<option></option>
						<option value="1">yes</option>
						<option value="0">no</option>
					</select>
					<input class="loginsubmit" value="Login">
				</form>
			</div>
		</div>
	</body>
</html>