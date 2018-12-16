<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<script src="../js/menu.js"></script>
	</head>
	<body>

		<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<!--a href="home.php">หน้าหลัก</a-->
				<a href="Create_Adopt.php">สร้างอดอป</a>
				<a href="set_auction.php">สร้างการประมูล</a>
				<a href="search.php">ค้นหา</a>
		</div>

		<span onclick="openNav()">&#9776; Menu</span>

		<div class="login">
			<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="row">
				<fieldset>
					<h1>ประวัติการซื้อขาย</h1>

					<!--div class="col-md-5"-->
				        <div class="his">					
				            <h2>ประวัติการซื้อ</h2>
				            
				        </div>
				    <!--/div-->

					<!--div class="col-md-7"-->
					    <div class="his2">
							<h2>ประวัติการขาย</h2>
							
						</div>	
					<!--/div-->
				</fieldset>
		</div>
		</div>

	</body>
</html>