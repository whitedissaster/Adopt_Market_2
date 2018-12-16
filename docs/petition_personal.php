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
						<form id="petition_personal" action="" method="post" enctype="multipart/form-data">

						<h1>ยืนยันตัวตน</h1>

						<!--label>รูปโปรไฟล์</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br-->

						<label>ใส่ภาพบัตรประชาชน</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

						<label>ชื่อจริง</label><br>
						<input type="text" id="" name="personal_firstname" placeholder="ชื่อจริง"><br><br>

						<label>นามสกุลจริง</label>
						<input type="text" id="widget1" name="personal_lastname" placeholder="นามสกุลจริง"><br><br>

						<label>รหัสประชาชน</label>
						<input type="text" id="widget1" name="personal_citizen_id" placeholder="รหัสประชาชน"><br><br>

						<label>วันเกิด </label>
						<input type="date" name="birthdate" min="<?php echo date('Y-m-d'); ?>"><br><br>

      					<label>ที่อยู่</label><br>
      					<label>บ้านเลขที่ : </label>
						<input type="text" id="" name="personal_address_sub" placeholder="บ้านเลขที่" style="width: 20%;">

						<label>ตำบล : </label>
						<input type="text" id="" name="personal_address_district" placeholder="ตำบล" style="width: 20%;">

						<label>อำเภอ : </label>
						<input type="text" id="" name="personal_address_amphoe" placeholder="อำเภอ" style="width: 20%;"><br>

						<label>จังหวัด : </label>
						<input type="text" id="" name="personal_address_province" placeholder="จังหวัด" style="width: 20%;">

						<label>รหัสไปรษณีย์ : </label>
						<input type="text" id="" name="personal_address_zipcode" placeholder="รหัสไปรษณีย์" style="width: 20%;">

						<label>ประเทศ : </label>
						<input type="text" id="" name="personal_address_country" placeholder="ประเทศ" style="width: 20%;"><br>

						<!--input type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php"-->

						<input type=button onClick='window.history.back()' value='Back' class="cancelbtn" style="border: none; color: #FFF; height: 48px; width: 100px;">

						<button type="submit" value="ยืนยัน" formaction="personal_assure.php" class="button button2">ยืนยัน</button>


						</form>
					</fieldset>
				</div>
		</div>

	</body>
</html>