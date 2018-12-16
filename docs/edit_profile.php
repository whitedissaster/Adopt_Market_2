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
			<a href="adopt.php">view adopt</a>
			<a href="history.php">ประวัติการซื้อขาย</a>
			<a href="search.php">ค้นหา</a>
		</div>

		<span onclick="openNav()">&#9776; Menu</span>

		<div class="login">
			<?php 
				include 'login_tab.php';
			?>
		</div>

		<div class="all">
		        <div class="row">
					<fieldset>
						<form id="edit_profile" action="" method="post" enctype="multipart/form-data">

						<h1>แก้ไขข้อมูลส่วนตัว</h1>

						<label>รูปโปรไฟล์</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

						<label>Username</label><br>
						<input type="text" id="" name="user_username" placeholder="Username"><br><br>

						<label>Password</label>
						<input type="text" id="widget1" name="user_password" placeholder="Password"><br><br>

						<label>เพศ : </label>
					    	<label for="gender">
					    	<!--input type="radio" name="user_gender" value="female">ชาย
					    	<input type="radio" name="user_gender" value="male">หญิง
					    	<input type="radio" name="user_gender" value="unknown">ไม่ระบุเพศ-->
					    	<label class="racontainer">ชาย
							  	<input id="in2" type="radio" name="adopt_gender" value="male">
							  	<span class="racheckmark"></span>
							</label>
							<label class="racontainer">หญิง
							  	<input id="in2" type="radio" name="adopt_gender" value="female">
							  	<span class="racheckmark"></span>
							</label>
							<label class="racontainer">ไม่ระบุเพศ
							  	<input id="in2" type="radio" name="adopt_gender" value="unknown">
							  	<span class="racheckmark"></span>
							</label>
						</label><br><br>

						<!--input type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php"-->

						<input type=button onClick='window.history.back()' value='Back' class="cancelbtn" style="border: none; color: #FFF; height: 48px; width: 100px;">

						<button type="submit" value="แก้ไข" formaction="profile.php" class="button button2">แก้ไข</button>

						<button type="submit" value="ยืนยันตัวตน" formaction="petition_personal.php" class="button button2">ยืนยันตัวตน</button>

						</form>
					</fieldset>
				</div>
		</div>

		<script src="../js/birthday.js"></script>

	</body>
</html>