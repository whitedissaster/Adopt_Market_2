<!--logout-->
<?php
	session_start();
	unset($_SESSION['id']);
	unset($_SESSION['user']);

	echo('ออกจากระบบแล้ว<br><br><a href="Create_Adopt.php">Create Adopt</a>');

?>