<!--comment-->


<fieldset>

	<h2>แสดงความคิดเห็น</h2>

	คุณ <?php echo $_SESSION["user"]; ?> กล่าวว่า : <br>
	<form id="create_comment" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="adopt_id" value="<?php echo($adopt_id); ?>">
		<textarea name="comment_detail" style="height:200px"></textarea>
		<input type="submit" value="ส่ง" formaction="comment_submit.php">
	</form>
</fieldset>

<?php

function view_comment($adopt_id){

}



?>