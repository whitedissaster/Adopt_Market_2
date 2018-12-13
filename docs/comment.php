<!--comment-->
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/theme.css">
	</head>
	<body>

		<div class="row">
			<fieldset>

				<h2>แสดงความคิดเห็น</h2>

				คุณ <?php echo $_SESSION["user"]; ?> กล่าวว่า : <br>
				<form id="create_comment" action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="adopt_id" value="<?php echo($adopt_id); ?>">
					<textarea name="comment_detail" placeholder="แสดงความคิดเห็น..." style="height:200px"></textarea><br>
					<!--input type="submit" value="ส่ง" formaction="comment_submit.php"-->
					<button type="submit" value="ส่ง" formaction="comment_submit.php" class="button button2">ส่ง</button>
				</form>
			</fieldset>

			<?php

				function view_comment($adopt_id){

				}

			?>
			
		</div>
	</body>
</html>