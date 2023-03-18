
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
#tab{border-radius: 10px; background-image: linear-gradient(to right,steelblue,white); width: 345px; height: 70px}
</style>
<nav>
<button class="btn btn-primary"><a href="http://localhost/sbr/home.php"><font color="black">home</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/collegeprofile.php"><font color="black">College Profile</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admission.php"><font color="black">Admission</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/feesstructure.php"><font color="black">Fee Structure</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/result.php"><font color="black">Result</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/neetexam.php"><font color="black">NEET/JEE Exam</a></button>
<button class="btn btn-primary"><a href="#"><font color="black">Gallery</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/reachus.php"><font color="black">Reach Us</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/userlogin.php"><font color="black">User Login</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/user/newusercreate.php"><font color="black">New User Sing Up</a></button>
<button class="btn btn-primary"><a href="http://localhost/sbr/admin/adminlogin.php"><font color="black">Admin Login</a></button>
<input type="text" name="t1" placeholder="search here" required id="tx" style=width:79px;height:35px;>
</nav>

        

        

</style>

 


<?php
session_start();
?>

    <html>

<head><title>login</title></head>
<center><img src="admin3.jpeg" width="100" height="100"><center>
<center><font size=2 color=red><b>Admin Login Here<b>
	<center><div id="tab"><table border="0" cellpadding="4" cellspacing="4" bgcolor="lime" style="border-radius: 10px 10px 10px 10px ">
	
	<form name="form" method="POST" action="adminlogin.php">
		<tr><td><font color=>Enter user/email id</td><td><input type="text" name="email" autofocus></td></tr>
		<tr><td>Enter password</td><td><input type="password" name="pass" value=""></td></tr>
		<tr><td colspan="2"><center><button class="btn btn-warning" value="login" name="login">Login</td></tr>
       
</table>

<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
    </html>
    <?php
 $con=mysqli_connect('localhost','root','','college_mgt');
 if(isset($_POST['login']))
    {
        $user_email=$_POST['email'];
        $user_pass=$_POST['pass'];

        $check_user="select* from sbradmin where admin_email='$user_email' AND password='$user_pass'";
        $run=mysqli_query($con,$check_user);
        if(mysqli_num_rows($run))
        {
         
            echo "<script> window.open('welcomeadmin.php','_self')</script>";
            $_SESSION['email']=$user_email;
        }
        else
        {
            echo "<script> alert('email or password is incorrect ! ')</script>";
        }
    }
    ?>
    
<hr>
    <button class="btn btn-warning"><a href="http://localhost/sbr/home.php">Back to home page</a></button>
</center><hr><hr><hr>

<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 110px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>