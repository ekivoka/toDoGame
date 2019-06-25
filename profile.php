<?php


?>

<!DOCTYPE  html>
<html>
	<head>
		<title>Личный кабинет</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/root.css">
		<link rel="stylesheet" type="text/css" href="css/avatar.css">
		<link rel="stylesheet" type="text/css" href="css/level.css">
		<link rel="stylesheet" type="text/css" href="css/spider.css">
		<link rel="stylesheet" type="text/css" href="css/goals.css">
		<link rel="stylesheet" type="text/css" href="css/deals.css">
		<link rel="stylesheet" type="text/css" href="css/plan.css">
		<link rel="stylesheet" type="text/css" href="css/projects.css">

		<script src="js/script.js" async></script>
	</head>
	<body>
    <div class = "page">
      <div class = "header">
				<?php
				//  include('logo.html');
				//  include('login.html');
				?>
			</div>

      <div class = "info">
				<?php
					include('avatar.php');
					include('level.php');
					include('goals.php');
				?>
			</div>

      <div class = "content">
				<?php
					include('deals.php');
				  include('plan.php');
				?>
			</div>
    </div>
	</body>
</html>
