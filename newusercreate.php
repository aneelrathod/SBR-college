
<html lang="en">
<head>
<meta charset="utf-8">


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
#tab{border-radius: 10px; background-image: linear-gradient(to right,steelblue,white); width: 340px; height: 115px}
</style>
<nav>
<button class="btn btn-primary"><a href="http://localhost/sbr/home.php"><font color="black">home</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/collegeprofile.php"><font color="black">College Profile</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admission.php"><font color="black">Admission</a></button>
<button class="btn btn-primary"><a href="#"><font color="black">Fee Structure</a></button>
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

 

<center>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">

<center><img src="userimage.jpg" width="100" height="100"></center>
<h5><font color=red><b>New User Create Account</b></h5>
	<form action="newusercreate.php" method="POST">
		<div id='tab'><table border="0" cellpadding="0" cellspacing="0" style="border-radius: 10px 10px 10px 10px ">
			<tr>
				<td>user name:</td>
				<td><input type="text" name="username" placeholder="username" required id="tx"></td></tr>
				<tr>
					<td>password:</td>
				<td><input id="password" name="password" type="password" placeholder="password" required/></td></tr>
				<tr><td>confirm password:</td>
					<td><input id="confirmpassword" name="confirmpassword"type="password" placeholder ="confirm password"required/></td></tr>
					<tr><td>Mobile number:</td>
					<td><input type="text" name="t1" placeholder="mobile number" required></td></tr>
					<tr><td colspan="2"><center><button class="btn btn-warning" value="registor" name="registor">Registor</button></center> </td></tr></table></form></body></html>


<?php
require('config.php');

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['confirmpassword'];
	$mobile=$_POST['t1'];

	$slquery="SELECT 1 FROM userpass2 WHERE username='$username'";
	$selectresult=mysqli_query($con,$slquery);
	if(mysqli_num_rows($selectresult)>0)

	{
		$msg='User Already Exists';
		echo "<h3 style='background:orange;color:white'>",$msg,"</h3>";
	}
else
{
	$query="INSERT INTO userpass2(username,password,mobile) VALUES ('$username','$password','$mobile')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		$msg="User Created Successfully.";
		echo "<h3 style='background:green; color:white'>",$msg,"</h3>";

echo "Enter OTP:<input type=text name=t9 placeholder='OTP'  required>
		<button class='btn btn-warning' name=b1><a href='http://localhost/sbr/user/studentform.php'>send</a></button>";

	
	}
}
}
?>

<marquee><font color="red"><b>Addmission open for 2023 PUC,BCA,B.Com,Bsc,MBA.MCA</b></marquee>
</center><hr>

<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1210px; height: 110px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>