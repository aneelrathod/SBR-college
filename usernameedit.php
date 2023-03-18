
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
require ('db.php');
$username=$_REQUEST['username'];
$query="SELECT * FROM userpass2 where username='".$username."'";
$result=mysqli_query($con,$query) or die(mysqli_error());
$row=mysqli_fetch_assoc($result);
?>

<html>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
	<div class="form">
		<button class="btn btn-warning"><a href="usernameinsert.php">Insert new record</a></button>
		<center><h4>Update Records</h4>
		<?php
		$status="";
		if(isset($_POST['new']) && $_POST['new']==1)
		{
			$id=$_REQUEST['username'];
			$trn_date= date("Y-m-d H:i:s");
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
			$mobile=$_REQUEST['mobile'];
			$update="update userpass2 set username='".$username."',password='".$password."',
			mobile='".$mobile."' where username='".$username."'";
			mysqli_query($con,$update) or die(mysqli_error());
			$status="record update successfully</br><//br>
			<button class='btn btn-warning'><a href='usernameupdate1.php'>view update record</a></button>";
			echo '<p style="color:lime;">'.$status.'</p>';

		}
else
{
	?>

<div>
	<form name="form" method="post" action="">
		<input type="hidden" name="new" value="1"/>
		<input name="id" type="hidden" value="<?php echo $row['username'];?>"/>
		<p><input type="text" name="username" id="tx" placeholder="Enter name" 
			required value="<?php echo $row['username'];?>"/></p>
		<p><input type="text" name="password" id="tx" placeholder="Enter password" 
			required value="<?php echo $row['password'];?>"/></p>
		<p><input type="text" name="mobile" id="tx" placeholder="mobile number" 
			required value="<?php echo $row['mobile'];?>"/></p>
			<p><button class="btn btn-warning" name="submit" value="update" id="bt" />submit</button></p>
	</form>
	<?php
}
	?>
</div>
</div>
</body></html>
<br><br><br>
		
		<footer>	
			
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1210px; height: 120px}
	</style>

<HR><hr>
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>


