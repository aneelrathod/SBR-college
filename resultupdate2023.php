
<html>

<style>
            .menu{
 background-color: #222222;
 color: white;
 padding: 18px;
 font-size: 14px;
 border: none;
}</style>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">

	<center>
	<h2>SBR STUDENT RESULT UPDATE</h2>
	<HR COLOR="RED">
	<form name=f1 action="resultupdate2023.php" method="POST">
		<center><table border=0 cellspacing="4" cellpadding="4" style="border-radius:10px 10px 10px 10px;background-color:khaki">
		<tr><td>Enter Year:</td><td><input type="text" name="t1" placeholder="PUC II year 2023" required></td></tr>
		<tr><td>Name:</td><td><input type="text" name="t2" placeholder="Name" required></td></tr>
		<tr><td>Enter PCMB Marks:</td><td><input type="text" name="t3" placeholder="PCMB" required></td></tr>
	<tr><td>Result:</td><td><input type="text" name="t4" placeholder="Result" required></td></tr>
	<tr><td>Resistor_No:</td><td><input type="text" name="t5" placeholder="Resistor_No" required></td></tr>


		<tr><td bgcolor="cyan"><center><input type=submit name=b1 value="submit" style="background-color:khaki;color:blue">
		<input type="reset" name="b2" value="reset" style="background-color:khaki;color:blue"></td></tr>
	</table>
	<a href=sbrviewdata.php>VIEW ALL RESULT</a><br>
	
	<button class="btn btn-warning"><a href="http://localhost/sbr/admin/welcomeadmin.php">Bcak</a></button>
     
	</form>
</body>
</html>

<?php
if(isset($_POST['b1']))
{

	$con=mysqli_connect("localhost","root","","sbrcollege");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$sql="INSERT INTO sbr(PUCIIyear,Name,PCMB,Result,Resistor_No)values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]')";

if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());

}

echo "record succesfully added";
mysqli_close($con);
}
?>
<br><br><br><br><br><br><br><br>

<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1200px; height: 120px}
	</style>

			<br>
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>