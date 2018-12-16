<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<script src="../js/menu.js"></script>
	</head>
	<body>

		<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<!--a href="home.php">หน้าหลัก</a-->
			<a href="adopt.php">view adopt</a>
			<a href="search.php">ค้นหา</a>
		</div>

		<span onclick="openNav()">&#9776; Menu</span>

		<nav>
			<span>
				<li><a href="home.php">หน้าหลัก</a></li>
				<li><a href="view_adopt.php">view adopt</a></li>
				<li><a href="search.php">ค้นหา</a></li>
			</span>
		</nav>

		<div class="login">
			<?php 
				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="row">           
				<fieldset>
				</fieldset>
			</div>
		</div>

	</body>
</html>