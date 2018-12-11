<!--Create Adopt-->
<?php 
	include 'login_tab.php';
?>
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
	<input type="text" id="widget1" name="adopt_themes" placeholder="ใช้เครื่องหมาย;หรือ,เพื่อขั้นแท็ก"><br><br>

	<label>เพศ : </label>
    	<label for="gender">
    	<input type="radio" name="adopt_gender" value="female">ชาย
    	<input type="radio" name="adopt_gender" value="male">หญิง
    	<input type="radio" name="adopt_gender" value="unknown">ไม่ระบุเพศ
	</label><br><br>

	<label>รายละเอียด</label><br>
	<textarea name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px"></textarea><br><br>

	<input type="submit" value="สร้าง" formaction="Create_Adopt_Submit.php">
</form>
</fieldset>

