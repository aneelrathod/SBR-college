<!DOCTYPE html>
<html><center>
<head>
	<style>
		#tx{border-radius: 10px; background-color: khaki; color: blue;font-size: 14pt;}
		#bt{border-radius: 10px; background-color: blue;white;font-size: 14pt;}
		#tab{border-radius: 10px; background-image: linear-gradient(to right,pink,skyblue,white);color: black;font-size: 14pt;}
		body{border-radius: 10px;background-image: linear-gradient(to right,skyblue,lightgreen);}
	</style>
</head>
<body>

</body>
</html>
<center><h1 id='tab'><font size="5">Record Delete</h1></center>
<hr>
<table id="tab">


	<?php
	$con=mysqli_connect("localhost","root","","sbrcollege");
	if(mysqli_connect_errno())
	{
echo "failed tom connect to mysql:".mysqli_connect_error();
	}
	$result=mysqli_query($con,"SELECT * FROM sbr2022");

	echo "<center>";
	echo "<h4> select record</h4>";
	echo "<table border='1' id='tab'>";
echo "<tr>";
echo "<th> PUCIIyear</th>";
echo "<th>Name</th>";
echo "<th>PCMB</th>";
echo "<th>Result</th>";
echo "<th>Resistor_No</th>";
echo "</tr>";

while($row=mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td>".$row['PUCIIyear']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['PCMB']."</td>";
echo "<td>".$row['Result']."</td>";
echo "<td>".$row['Resistor_No']."</td>";
}
echo "</table>";


?>
<form name="f1" acrtion="resultdelete2022.php" method="POST">
	<table id="tab" border="0">
		<font size="4"><b> which record you want to delate:
			<tr><td><input type="text" name="t1" id="tx"></td>
			<td><b><input type="submit" name="b1" value="delete" id="bt"></b></td></tr></table>
       
		</b></form>
        <a href="http://localhost/sbr/admin/welcomeadmin.php">Back</a>

		<?php
		if(isset($_POST['b1']))
		{
			$rn=$_POST['t1'];
			$con=mysqli_connect("localhost","root","","sbrcollege");
				if(mysqli_connect_errno())
				{
					echo"failed to connect to mysqli:".mysqli_connect_error();

				}
				$result=mysqli_query($con,"DELETE FROM sbr2022 where Resistor_No='$rn'");
				echo"</table>";


		}
		?>



<br><br><br><br><br>
<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1200px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>