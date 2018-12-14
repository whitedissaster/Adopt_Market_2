<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<nav>
			<span>
				<li><a href="">หน้าหลัก</a></li>
				<li><a href="Create_Adopt.php">สร้างอดอป</a></li>
				<li><a href="view_adopt.php">view adopt</a></li>
			</span>
		</nav>

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
					<form id="deal_offer" action="" method="post" enctype="multipart/form-data">
						<h1>ข้อตกลง</h1>
						<label>ชื่อผู้ขาย: </label>
							<input type="text" name="user_alias" placeholder="ชื่อผู้ขาย"> <br><br>

						<label>ชื่อสินค้า</label><br>
							<input type="text" id="" name="adopt_name" placeholder="ชื่ออดอป..."><br><br>

						<label>สถานะดีล: </label> 
							<select id="sale" name="offer_status">
						        <option value="0"> refuse </option>
						        <option value="1"> waiting </option>
						        <option value="2"> sold </option>
						    </select> <br><br>

						<label>สิทธิการใช้อดอป: </label> <br>
							<label>ผู้ซื้อดัดแปลงดีไซน์</label>
						        <select id="modify" name="customer_design_right_modify">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option> 
						        </select> <br>
						        <div id="modify2" style="display: none">
						           	<input type="text" id="" name="customer_design_condition_commercial" placeholder="เงื่อนไข..."><br><br>
						        </div>

						    <label>ผู้ซื้อใช้งานในเชิงพาณิชย์</label>
						        <select id="modify" name="customer_design_right_commercial">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option> 
						        </select> <br>
						        <div id="modify2" style="display: none">
						           	<input type="text" id="" name="customer_design_condition_commercial" placeholder="เงื่อนไข..."><br><br>
						        </div>

						    <label>ผู้ซื้อเผยแพร่ภาพต้นฉบับ</label>
						        <select id="modify" name="customer_design_right_publish">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option> 
						        </select> <br>
						        <div id="modify2" style="display: none">
						           	<input type="text" id="" name="customer_design_condition_publish" placeholder="เงื่อนไข..."><br><br>
						        </div>

						    <label>ผู้ซื้อนำรูปต้นฉบับไปใช้ในเชิงพาณิชย์</label>
						        <select id="modify" name="custumer_image_right_commercial">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option> 
						        </select> <br>
						        <div id="modify2" style="display: none">
									<input type="text" id="" name="custumer_image_condition_commercial" placeholder="เงื่อนไข..."><br><br>
						        </div>

						    <label>ผู้ซื้อโอนสิทธิ์แก่ผู้อื่น</label>
						        <select id="transfer" name="customer_right_transfer_permissions">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option>
						        </select> <br>
						        <div id="transfer2" style="display: none">
									<input type="text" id="" name="customer_condition_transfer_permissions" placeholder="เงื่อนไข..."><br><br>
					            </div>

					            <label>ผู้ซื้อดัดแปลงภาพต้นฉบับ</label>
						        <select id="transfer" name="customer_image_right_modify">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option>
						        </select> <br>
						        <div id="transfer2" style="display: none">
									<input type="text" id="" name="customer_image_condition_modify" placeholder="เงื่อนไข..."><br><br>
					            </div>

					            <label>สิทธิ์ในการขอเครดิตในผลงานต่อยอด</label>
						        <select id="modify" name="creator_design_right_credit">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						        </select> <br><br>

						        <label>ผู้วาดมีสิทธิ์</label><br>
						        <input type="checkbox" class="switch" name="creator_design_right_apply" value=1>ใช้งานดีไซน์<br>

						        <input type="checkbox" class="switch" name="creator_design_right_commercial" value=1>ใช้งานดีไซน์เชิงพาณิชย์<br>

						        <label>ผู้วาดมีสิทธิ์ในการเผยแพร่ภาพต้นฉบับ</label>
						        <select id="transfer" name="creator_design_right_publish">
						            <option value="1">อนุญาต</option>
						            <option value="0">ไม่อนุญาต</option>
						            <option value="2">อนุญาติภายใต้เงื่อนไข</option>
						        </select> <br><br>
						        <div id="transfer2" style="display: none">
							        <label>เงื่อนไขนการเผยแพร่ภาพต้นฉบับของผู้ขาย:</label><br>
									<input type="text" id="" name="creator_design_condition_publish" placeholder="เงื่อนไข..."><br><br>
					            </div>

					            <label>ข้อตกลงพิเศษเกี่ยวกับดีไซน์</label><br>
								<input type="text" id="" name="design_condition_adjunct" placeholder="ข้อตกลง..."><br><br>

								<label>ข้อตกลงพิเศษเกี่ยวกับรูปภาพ</label><br>
								<input type="text" id="" name="image_condition_adjunct" placeholder="ข้อตกลง..."><br><br>

								<label>ราคาขาย</label><br>
								<input type="text" id="" name="auto_buy" placeholder="ราคา"><br><br>

						<button type="submit" value="สร้าง" formaction="deal_offer_submit.php" class="button button2">สร้าง</button>

				</form>
				</fieldset>
			</div>
		</div>

	</body>
</html>