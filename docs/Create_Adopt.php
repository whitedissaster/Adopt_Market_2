<!--Create Adopt-->
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
						<form id="create_adopt1" action="" method="post" enctype="multipart/form-data">

						<h1>สร้างรายการขาย</h1>

						<h2>สินค้า</h2>

						<label>ไฟล์สินค้า</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

						<label>ชื่อสินค้า</label><br>
						<input type="text" id="" name="adopt_name" placeholder="ชื่ออดอป..."><br><br>

						<label>หมวดหมู่</label>
						<select name="adopt_type">
					    	<option value="people">คน</option>
					    	<option value="animal">สัตว์</option>
					    	<option value="clothes">ชุด</option>
					    	<option value="item">สิ่งของ</option>
							<option value="place">สถานที่</option>
						</select><br><br>

						<label>ธีม</label>
						<input type="text" id="widget1" name="adopt_themes" placeholder="ใช้เครื่องหมาย;หรือ,เพื่อคั่นแท็ก"><br><br>

						<label>เพศ : </label>
					    	<label for="gender">
					    	<!--input type="radio" name="adopt_gender" value="male">ชาย
					    	<input type="radio" name="adopt_gender" value="female">หญิง
					    	<input type="radio" name="adopt_gender" value="unknown">ไม่ระบุเพศ-->
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

						<label>รายละเอียด</label><br>
						<textarea name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px"></textarea><br>

						<!--input type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php"-->

						<button type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php" class="button button2">สร้าง</button>

						</form>
					</fieldset>
				
			</div>
		</div>

	</body>
</html>