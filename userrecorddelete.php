
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<img src="sbr11.jpg" width=1225 height=150>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
</body>
</html>
<?php
require('db.php');
$username=$_REQUEST['username'];
$query="DELETE FROM userpass2 WHERE username='$username'";
$result=mysqli_query($con,$query) or die(mysqli_error());
header("loaction:usernameupdate1.php");

?>
<br>
<button class="btn btn-warning"><a href="http://localhost/sbr/admin/usernameupdate1.php">Go To View Records</a></button>

<br><br><br><br><br><br><br><br><b><br><br><br><br><br><br><br>
<footer>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 95px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>