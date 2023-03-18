<html>
    <head>
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
<button class="btn btn-primary"><a href="#"><font color="black">Fee Structure</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/result.php"><font color="black">Result</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/neetexam.php"><font color="black">NEET/JEE Exam</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/gallery2.php"><font color="black">Gallery</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/reachus.php"><font color="black">Reach Us</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/userlogin.php"><font color="black">User Login</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/newusercreate.php"><font color="black">New User Sing Up</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admin/adminlogin.php"><font color="black">Admin Login</a></button>
<input type="text" name="t1" placeholder="search here" required id="tx" style=width:79px;height:50px;>
</nav>

        

        

</style>


 
</style>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">    
<marquee><font color="red"><b>Addmission open for 2023 PUC,BCA,B.Com,Bsc,MBA.MCA</marquee></p>
<center>
    <form name=f1 action="stdapplicationstatus.php" method="POST">
        Enter Adhar Number:<input type="text" name="t9" required>
        <button class="btn btn-warning" name="b1">Find</button>click here and check the Aplication status</form>
</body>
</html>
<?php
if(isset($_POST['b1']))
{
$aadhar=$_POST['t9'];
$con=mysqli_connect("localhost","root","","sbrcollege");
if(mysqli_connect_errno())
{
    echo"failed to connect to mysqli:".mysqli_connect_error();
}
$result=mysqli_query($con,"SELECT * FROM  studentdata WHERE aadhar='$aadhar'");
echo"<table style='border:5px double silver;'>";
while($row=mysqli_fetch_array($result))
{
    echo "<tr><td><b>first_name:</b> ".$row['first_name']." </td></tr><tr><td><b>last_name:</b> ".$row['last_name']."</td></tr>";
    echo "<tr><td><b>address:</b> ".$row['address']." </td></tr><tr><td><b>gender:</b> ".$row['gender']."</td></tr>";
    echo "<tr><td><b>email_id:</b> ".$row['email_id']." </td></tr><tr><td><b>mobile:</b>".$row['mobile']."</td></tr>";
    echo "<tr><td><b>aadhar:</b> ".$row['aadhar']." </td></tr><tr><td><b>coures:</b>".$row['coures']."</td></tr>";

    echo "<tr><td><center>your application is succesfully done..!</td></tr>";
echo "<tr><td><center>Wait for some times once approval you are a get call/massage from SBR  college..!!</td></tr> ";
echo "<tr><td colspan='2'><center><input type='button' name='print' value='print/Downloads' onclick='window.print()'>";	
 echo"</table>";

}

}?>


	<br><br><br><br><br><br><br><br>
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>