<!--Set Auction-->
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
			<div class="col-md-7">
		        <div class="about_right">
		        	<fieldset>

						<h2>ตั้งประมูล</h2>
						<form id="create_auction" action="" method="post" enctype="multipart/form-data">

						ราคาเริ่มต้น<br>
						<input type="text" name="auction_sb" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
						<br><br>

						ราคาขายอัตโนมัติ<br>
							<select class="AB" name="auction_have_ab">
						        <option value="0">ไม่กำหนด</option>
						        <option value="1">กำหนด</option>
						    </select>

						        <div id="AB" style="display: none">
						            ราคาขายอัตโนมัติ<br>
							 		<input type="text" name="auction_ab" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
							 	</div>
						<br><br>

						บิดขั้นต่ำ<br>
							 	<select name="auction_bid">
						            <option value=10>10 บาท</option>
						            <option value=50>50 บาท</option>
						            <option value=100>100 บาท</option>
						        </select>
						<br><br>

						เริ่มต้นการประมูล<br>
							 	<select name="auction_start_type" id="start_auction">
						            <option value="now">ทันที</option>
						            <option value="set">ตั้งเวลา</option>
						        </select>

						    <div class="datetime">
								<label>วัน-เวลาที่เริ่ม : </label>
								 	<input type="datetime-local" name="auction_start_day" min="<?php echo date('Y-m-d'); ?>"><br>
								<!--label>เวลา : </label>
								 	<input type="time" name="auction_start_time"><br-->
							</div>
						<br><br>

						ระยะเวลาการประมูล<br>
								<select  name="aution_time_length">
						            <option value=1>1 ชั่วโมง</option>
						            <option value=3>3 ชั่วโมง</option>
						            <option value=24>1 วัน</option>
						            <option value=72>3 วัน</option>
						        </select>
						<br><br>

						<!--input type="checkbox" class="switch" name="aution_over_time_set" value=1>ต่อเวลาเมื่อมีการปาด<br>
						<input type="checkbox" class="switch" name="buy_limit_no_stranger" value=1>จำกัดการเข้าร่วมเฉพาะสมาชิกที่ยืนยันตัวตน-->

						<label class="ccontainer">ต่อเวลาเมื่อมีการปาด
						<input id="in" type="checkbox" name="aution_over_time_set" value=1>
						<span class="checkmark"></span>
						</label>
						<label class="ccontainer">จำกัดการเข้าร่วมเฉพาะสมาชิกที่ยืนยันตัวตน
						<input id="in" type="checkbox" name="buy_limit_no_stranger" value=1>
						<span class="checkmark"></span>
						</label>

						<br><br>

						<button type="submit" value="ตั้งประมูล" formaction="set_auction_submit.php" style="width: auto;">ตั้งประมูล</button>

					</form>
					</fieldset>

					<?php
					//include 'view_adopt.php';
					?>

	</body>
</html>

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<!--script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script-->
<script>
	$('.AB').change(function(){
			    var selection = $('.AB').val();
			    switch(selection){
			    	case "0":
			    		$("#AB").css("display","none");
			            break;
			    	case "1":
			    		$("#AB").css("display","block");
			            break;
			    }
			});
	//---------------------------------------------
	$(".datetime").hide();

		    $('#start_auction').change(function(){
			    var selection = $('#start_auction').val();
			    switch(selection){
			        case 'set':
			            $(".datetime").show();
			            break;
			        case 'now':
			            $(".datetime").hide();
			            break;
			    }
			});
</script>