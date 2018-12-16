<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/report_adopt.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<!--button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button-->
		<button onclick="document.getElementById('id01').style.display='block'" class="btn" style="color: yellow"><i class="fa fa-warning" style="height: 20px;"></i></button></a>

		<div id="id01" class="modal">
		  	<form class="modal-content" action="/action_page.php">

		  		<div class="imgcontainer">
			      		<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			    </div>

		    	<div class="container">
			      	<h1>รายงานการละเมิดลิขสิทธิ์</h1>
			      
			      	<label>หลักฐานการละเมิด</label><br>
					<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

				    <label>รายละเอียด</label><br>
					<textarea name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px"></textarea><br>

		        	<div class="clearfix">
		        		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
		        	<button type="submit" value="submit"
		        	formaction="report.php" class="submitbtn">Submit</button>
		      		</div>
		    	</div>
		  	</form>
		</div>

		<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
		</script>

	</body>
</html>