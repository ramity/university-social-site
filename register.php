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
		<?php
		//error
		?>
		<div id="logincover">
			<div id="logincenter">
				<form id="loginbox" style="height:580px;margin:-290px -480px;">
					<div id="loginheader">
						You'll love it here.
					</div>
					<div class="loginlabel">Full name</div>
					<input class="logininput" placeholder="full name">
					<div class="loginlabel">Desired username</div>
					<input class="logininput" placeholder="desired username">
					<div class="loginlabel">Email</div>
					<input class="logininput" placeholder="email">
					<div class="loginlabel">Password</div>
					<input class="logininput" placeholder="password">
					<div class="loginlabel">Repeat password</div>
					<input class="logininput" placeholder="Repeat password">
					<input class="loginsubmit" value="Login">
				</form>
			</div>
		</div>
	</body>
</html>