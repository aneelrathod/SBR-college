<?php

$con=mysqli_connect("localhost","root","","sbrcollege");
if(mysqli_connect_errno())
{

echo "fiald to connect MySQL:".mysqli_conect_error();
}
$result=mysqli_query($con,"SELECT * FROM sbr2022");
echo "<center>";
echo "<table style='border:5px double silver;'>";
echo "<tr bgcolor=black><th colspan=5><font color=white>SB College PUC II Year Result</th></tr>";
echo "<tr bgcolor=silver>";

echo "<th>PUCIIyear</th>";
echo "<th>Name</th>";
echo "<th>PCMB</th>";
echo "<th><font color=red>Result</th>";
echo "<th>Resistor No</th>";
echo "</tr>";



while($row = mysqli_fetch_array($result))
{
	echo"<tr>";
	echo "<td>".$row['PUCIIyear']."</td>";
	echo "<td>".$row['Name']."</td>";
	echo "<td>".$row['PCMB']."</td>";
	echo "<td>".$row['Result']."</td>";
	echo "<td>".$row['Resistor_No']."</td>";
	
}
echo "</table>";
echo "<center>";
echo "<HR COLOR=YELLOW>";



?>


