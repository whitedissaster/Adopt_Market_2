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
				//include 'ConnextDatabase.php';
				$adopt_id = $_GET["adopt_id"];


				include 'login_tab.php';
			?>
		</div>

		<div class="all">
			<div class="row">
				<fieldset>
					<h1>ค้นหาอดอป</h1>
					<label>ชื่อผู้ขาย</label>
						<input type="text" name="user_alias" placeholder="ชื่อผู้ขาย"> <br><br>

					<label>ชื่อสินค้า</label><br>
						<input type="text" id="" name="adopt_name" placeholder="ชื่ออดอป..."><br><br>

					<label>หมวดหมู่</label>
				        <select name="adopt_type">
				        	<option value="people">คน</option>
				        	<option value="animal">สัตว์</option>
				        	<option value="clothes">ชุด</option>
				        	<option value="item">สิ่งของ</option>
				        	<option value="place">สถานที่</option>
				        </select> <br><br>

				    <label>ธีม</label>
				        <input type="text" id="widget1" name="adopt_themes" placeholder="ใช้เครื่องหมาย;หรือ,เพื่อคั่นแท็ก"> <br><br>

				    <label>เพศ : </label>
				        <label for="gender">
				            <input type="radio" name="adopt_gender" value="female">ชาย
				            <input type="radio" name="adopt_gender" value="male">หญิง
				            <input type="radio" name="adopt_gender" value="unknown">ไม่ระบุเพศ
				        </label><br><br>

					<label>ประเภทการขาย</label> 
						<select id="sale" name="sale_type">
					        <option value="0"> ขาย </option>
					        <option value="1"> ประมูล </option>
					        <option value="2"> ขายและประมูล </option>
					    </select> <br><br>

					<button class="button button2" style="width: 200px;">ค้นหาอย่างละเอียด</button> <br><br>

					<div id="AB" style="display: block;">
					<label>สิทธิการใช้อดอป</label> <br>
						<label>ผู้ซื้อดัดแปลงดีไซน์</label>
					        <select id="modify" name="deal_modify">
					            <option value="1">อนุญาต</option>
					            <option value="0">ไม่อนุญาต</option>
					            <option value="2">อนุญาตภายใต้เงื่อนไข</option> 
					        </select> <br>
					        <div id="modify2" style="display: block;">
					           	<input type="checkbox" class="switch" name="deal_modify_inform" value=1>แจ้งแก่ผู้วาดทุกครั้งก่อนทำการดัดแปลง
					        </div>

					    <label>ผู้ซื้อนำภาพต้นฉบับไปใช้โดยตรง</label>
					        <select id="cuspic" name="deal_manuscript">
					            <option value="1">อนุญาต</option>
					            <option value="0">ไม่อนุญาต</option>
					            <option value="2">อนุญาตภายใต้เงื่อนไข</option>
					        </select> <br>
					        <div id="cuspic2" style="display: block;">
						       	<input type="checkbox" class="switch" name="deal_manuscript_nocommercial" value=1>ไม่ใช่การใช้งานเชิงพาณิชย์<br>
					         	<input type="checkbox" class="switch" name="deal_manuscript_credit" value=1>ระบุเครดิตเมื่อนำไปใช้<br>
						        <input type="checkbox" class="switch" name="deal_manuscript_nomodify" value=1>ห้ามทำการดัดแปลง/ต่อเติม/แก้ไขรูปภาพ<br>
						        <input type="checkbox" class="switch" name="deal_manuscript_inform" value=1>แจ้งแก่ผู้วาดทุกครั้งก่อนการใช้ภาพ<br>
					        </div>

					    <label>ผู้ซื้อโอนสิทธิ์แก่ผู้อื่น</label>
					        <select id="transfer" name="deal_transfer">
					            <option value="1">อนุญาต</option>
					            <option value="0">ไม่อนุญาต</option>
					            <option value="2">อนุญาตภายใต้เงื่อนไข</option>
					        </select> <br>
					        <div id="transfer2" style="display: block;">
						        <input type="checkbox" class="switch" name = "deal_transfer_inform" value=1>แจ้งแก่ผู้วาดเมื่อมีการเปลี่ยนแปลงผู้ถือสิทธิ์<br>
					            <input type="checkbox" class="switch" name = "deal_transfer_money" value=1>ผู้วาดมีสิทธิ์เรียกค่าใช้จ่ายเพิ่มเติมเมื่อมีการโอนสิทธิ์<br>
				            </div>

					    <label>ผู้วาดมีสิทธิ์ในผลงาน</label><br>
					        <input type="checkbox" class="switch" name="deal_creator_portfolio" value=1>เผยแพร่ภาพในพอร์ตรวบรวมผลงาน<br><br>
					</div>
					<button class="button button2">ค้นหา</button>
				</fieldset>
			</div>
		</div>

	</body>
</html>