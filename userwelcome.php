

<html>
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
<input type="text" name="t1" placeholder="search here" required id="tx" style=width:79px;height:35px;>
</nav>

        

        

</style>


  

  
<?php
session_start();
if(!$_SESSION['email'])
{
    header("location:userlogin.php");
}
?>
<html><center>
        <head><title>wel come on SB College</title>
        <body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
            <h3>Wel Come User</h3>

            <?php
            echo"<u><b>" ,$_SESSION['email'],"</b></u>";
            ?>
            
            <hr color="green" size="5">
            
            
           <button class="btn btn-warning">
             <a href="http://localhost/sbr/user/studentform.php">click for registration form</a></button>
           <button class="btn btn-warning"> <a href="http://localhost/sbr/user/stdapplicationstatus.php">Click here check the status and print</a></button>
   
            <button class="btn btn-warning"><div align="right"><a href="userlogin.php">logout</a></button>
            <hr>
            <marquee><font color="red">Addmission open for 2023 PUC,BCA,B.Com,Bsc,MBA.MCA</marquee></p>
            <br><br><br>

            <footer>
              	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>