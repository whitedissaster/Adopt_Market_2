<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<nav>
			<span>
				<li><a href="">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="view_adopt.php">view adopt</a></li>
				<li><a href="history.php">ประวัติการซื้อขาย</a></li>
				<li><a href="search.php">ค้นหา</a></li>
			</span>
		</nav>

		<div class="login">
			<?php 
				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="col-md-7">
		        <div class="about_right">
					<fieldset>
						<form id="petition_personal" action="" method="post" enctype="multipart/form-data">

						<h1>ยืนยันตัวตน</h1>

						<!--label>รูปโปรไฟล์</label><br>

						<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br-->

						<label>ชื่อจริง</label><br>
						<input type="text" id="" name="personal_firstname" placeholder="ชื่อจริง"><br><br>

						<label>นามสกุลจริง</label>
						<input type="text" id="widget1" name="personal_lastname" placeholder="นามสกุลจริง"><br><br>

						<label>รหัสประชาชน</label>
						<input type="text" id="widget1" name="personal_citizen_id" placeholder="รหัสประชาชน"><br><br>

						<label>วันเกิด ： </label>

						<?php 
	 						//$rows['Birthdate'] ="1986-02-12";
							$Birthdate = explode('-', $rows['Birthdate']);
							$d = $Birthdate[2];
							$m = $Birthdate[1];
							$y = $Birthdate[0]+543;


						    $month = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"); 
						?>
	 
	 					<select name="new_Date"  id="new_Date" onchange="getAge()">
       						<option value='null'>date</option>
       						<?php foreach (range (1, 31) as $resl) { 
		   					?>
       						<option value="<?=$resl?>"  <?if($resl ==$d) echo "selected"?>> <?=$resl?> </option>
	   						<?php } ?>
	   					</select>
	   
	 					<select name="new_Month" id="new_Month" onchange="getAge()"> 
        					<option value='null'>Month</option>
	    					<?php foreach ($month as $key=>$resl) { ?> 
        					<option value="<?=$key?>" <?if($key ==$m-1) echo "selected"?>> <?=$resl?> </option>    
	 	   					<?php } ?>
	 	   				</select>
  
    					<select name="new_Years" id="new_Years" onchange="getAge()">
      						<option value='null' >Years</option> 
	  						<?php foreach (range (2500, 2561) as $resl) { ?>
      						<option value="<?=$resl?>" <?if($resl ==$y) echo "selected"?>> <?=$resl?> </option>
      						<?php } ?>
      					</select><br><br>

      					<label>ที่อยู่ : </label><br>
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

						<button type="submit" value="ยืนยัน" formaction="personal_assure.php" class="button button2">ยืนยัน</button>


						</form>
					</fieldset>
				</div>
			</div>
		</div>

		<script src="../js/birthday.js"></script>

	</body>
</html>