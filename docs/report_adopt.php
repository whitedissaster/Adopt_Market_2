<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link rel="stylesheet" type="text/css" href="../style/report_adopt.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	</head>
	<body>

		<button onclick="document.getElementById('id02').style.display='block'" class="btn" style="color: yellow"><i class="fa fa-warning" style="height: 15px;"></i></button></a>

		<div id="id02" class="rmodal">
		  	<form class="rmodal-content animated zoomIn" action="/action_page.php">

		  		<div class="rimgcontainer">
			      		<span onclick="document.getElementById('id02').style.display='none'" class="rclose" title="Close Modal">&times;</span>
			    </div>

		    	<div class="rcontainer">
			      	<h1>รายงานการละเมิดลิขสิทธิ์</h1>
			      
			      	<label>หลักฐานการละเมิด</label><br>
					<input type="file" name="fileToUpload" accept="image/x-png,image/gif,image/jpeg"><br><br>

				    <label>รายละเอียด</label><br>
					<textarea class="rtextarea" name="adopt_detail" placeholder="รายละเอียดอื่นๆ..." style="height:200px" required></textarea><br>

		        	<div class="clearfix">
		        		<button type="button" onclick="document.getElementById('id02').style.display='none'" class="rcancelbtn">Cancel</button>
		        	<button type="submit" value="submit"
		        	formaction="report.php" class="submitbtn">Submit</button>
		      		</div>
		    	</div>
		  	</form>
		</div>

		<script>
		// Get the modal
		var rmodal = document.getElementById('id02');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		  	if (event.target == rmodal) {
		    	rmodal.style.display = "none";
		  }
		}
		</script>

	</body>
</html>