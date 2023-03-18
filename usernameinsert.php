
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
    <img src="sbr11.jpg" width=1225 height=150>
    <style>
            .menu{
 background-color: #222222;
 color: white;
 padding: 18px;
 font-size: 14px;
 border: none;
}
</style>
<nav>
<button class="btn btn-primary"><a href="http://localhost/sbr/home.php"><font color="black">home</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/collegeprofile.php"><font color="black">College Profile</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admission.php"><font color="black">Admission</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/feesstructure.php"><font color="black">Fee Structure</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/result.php"><font color="black">Result</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/neetexam.php"><font color="black">NEET/JEE Exam</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/gallery2.php"><font color="black">Gallery</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/reachus.php"><font color="black">Reach Us</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/userlogin.php"><font color="black">User Login</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/newusercreate.php"><font color="black">New User Sing Up</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admin/adminlogin.php"><font color="black">Admin Login</a></button>
<input type="text" name="t1" placeholder="search here" required id="tx" style=width:79px;height:35px;>
</nav>

        

        

</style>


<?php
if(isset($_POST['b1']))
{

$us=$_POST['username'];
$ps=$_POST['password'];
$mb=$_POST['mobile'];

	$con=mysqli_connect("localhost","root","","sbrcollege");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$sql="INSERT INTO userpass2(username,password,mobile)values('$us', '$ps', '$mb')";

if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());

}

echo "record succesfully added";
mysqli_close($con);
}

?>
<html>
<head>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
<div class="form">
<button class="btn btn-warning"><a href="usernameupdate1.php"> view record</a></button>
<div>
	<center>
<h3><font color="#154360 ">INSERT NEW RECORDS</h3>
<form name="form" method="POST" action="usernameinsert.php">
	
<input type="hidden" name="new" value="1"/>
<p><input type="text" name="username" placeholder="Enter name/mail id" required/></p>
<p><input type="text" name="password" placeholder="Enter password" required/></p>
<p><input type="text" name="mobile" placeholder="Enter mobile number" required/></p>
<p><input type="submit" name="b1"  value="submit"/></p>
<p><button class="btn btn-success" name="b2" value="go to admin page"><a href="http://localhost/sbr/admin/welcomeadmin.php">Go To Admin Page</a></button>
</p>
</form>

</div>
</div>
</body>
</html>



<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1210px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>