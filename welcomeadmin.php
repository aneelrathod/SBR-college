<html lang="en">

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
<input type="text" name="t1" placeholder="search here" required id="tx" style=width:79px;height:30px;>
</nav>

        

        

</style>

<?php
session_start();
if(!$_SESSION['email'])
{
    header("location:adminlogin.php");
}
?>
<html>
    <style>
        #bt{border-radius: 10px; background-color: blue;white;font-size: 14pt;}
        </style>
        <head><title>wel come on SB College</title>
        <body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
            <center><h3>Wel Come Admin</h3>

            <?php
            echo"<i>" ,$_SESSION['email'],"</i>";
            ?>
            <hr color=lime size=5>
            <div align="right"><button class="btn btn-warning"><a href="adminlogin.php">logout </a> </button>
            <center>
            <table border="0" cellspading="0" cellspacing="0" style="border-radius: 10px 10px 10px 10px ; background-color:skyblue">
                <tr><td>
			<a href="http://localhost/sbr/admin/resultupdate2023.php"><font color="warning">Click here for 2023 batch result UPDATE</a></td>
            <td><a href="http://localhost/sbr/admin/resultdelete2023.php"><font color="red">Click here for 2023 batch result DELETE</a></tr>

			<tr><td><a href="http://localhost/sbr/admin/resultupdate2022.php"><font color="warning">Click here for 2022  batch result UPDATE</a></td>
            <td><a href="http://localhost/sbr/admin/resultdelete2022.php"><font color="red">Click here for 2022 batch result DELETE</a></tr>

            <tr><td colspan=1><a href="http://localhost/sbr/admin/usernameupdate.php">Click here for New User Registor</a></td>
            <td><a href="http://localhost/sbr/admin/usernameupdate1.php">Click here for all user records</a></td></tr> 

</table>
</body>
</html>
<hr>
<footer>
<html>
<head>
<hr>
<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>