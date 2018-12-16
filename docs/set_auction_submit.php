<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
		<link rel="stylesheet" type="text/css" href="../style/set_auction_submit.css">
		<script src="../js/menu.js"></script>
	</head>
	<body>

		<div id="mySidenav" class="sidenav">
		  	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  	<!--a href="home.php">หน้าหลัก</a-->
			<a href="Create_Adopt.php">สร้างอดอป</a>
			<a href="set_auction.php">สร้างการประมูล</a>
			<a href="adopt.php">view adopt</a>
			<a href="history.php">ประวัติการซื้อขาย</a>
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
			<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'view_adopt.php';
			?>
			<div class="row">
			<fieldset>

				<h1>ประมูล</h1>

				    <div class="auc">				
				        <p>ข้อเสนอ</p>

				        <div class="auc_1">			
				        	<p>ราคาสูงสุดปัจจุบัน+ผู้ประมูล</p>
				        	<div class="h_price">
				        		<p class="a_price">100</p>
								<p class="a_time">11.00</p>
				        	</div>
				        	
				        	<div class="member">
				        		<div class="n_member">
									<p>name</p>
								</div>
									
								<img src="../Nightp.jpg" alt="Avatar" class="avatar">
				        	</div>

				    	</div>

						<div class="auc_2">
							<p>เสนอราคา</p>
							
							<!--div class="quantity">
							  	<input type="number" min="1" max="9" value="1">
							  	<input type="submit" name="submit"><br><br>
							</div-->
							<?php
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'input_price.php';
			?>
								
						</div>

				    </div>

					<div class="auc2">
						<p><i class="fa fa-hourglass-start"></i>เวลาการประมูล</p>

						<div class="auc2_1">
							<p>ประวัติการประมูล</p>
							<div class="a_member">
								<div class="a_member_price">
									<p class="a_price">100</p>
									<p class="a_time">11.00</p>
								</div>
								<div class="a_member_pic">
									<div class="n_member">
										<p>name</p>
									</div>
									
									<img src="../Nightp.jpg" alt="Avatar" class="avatar">

								</div>
							</div>
						</div>

					</div>

			</fieldset>
		</div>
</div>

	</body>
</html>