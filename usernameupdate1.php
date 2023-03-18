
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
#tab{border-radius: 10px; background-image: linear-gradient(to right,steelblue,white); width: 345px; height: 150px}
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
require('db.php');
?>
<html>
    <head>
        <title><h3>View record</h3></title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">
    <div class="form">
        <button class="btn btn-warning"><a href="usernameinsert.php">Insert New record</a></button>
        <h3 id="hd" align=center><font color="#154360 ">VIEW RECORDS</h3>
        <center>
        <div id="tab"><table border="0" style="border-collapse:collapse;"></div>
        <thead>
            <tr>
                <th><center><strong><font color="#D35400 ">Username</strong></th>
                <th><strong><font color="#D35400 ">Password</strong></th>
                <th><center><strong><font color="#D35400 ">Mobile</strong></th>
                <th><strong><font color="#D35400 ">Edit</strong></th>
                <th><strong><font color="#D35400 ">Delete</strong></th>
</tr>
</thead>
<tbody>
    <?php
    $count=1;
    $sel_query="select* from userpass2 ORDER BY username desc;";
    $result=mysqli_query($con,$sel_query);
    while($row= mysqli_fetch_assoc($result))
    {
        ?>
<td align="center"><?php echo $row ["username"]; ?></td>
<td align="center"><?php echo $row ["password"];?></td>
<td align="center"><?php echo $row["mobile"];?></td>
<td align="center">
    <a href="usernameedit.php?username=<?php echo $row["username"];?> "><img src="edit1.png" width="40" height="30"></a>
</td>
<td align="center">

    <a href="userrecorddelete.php?username=<?php echo $row["username"];?>" onclick="return confirm('sure to delete?!');"><img src="deletephoto.png" width="40" height="30"></a>
</td>
</tr>

<?php $count++;
}
?>
</tbody>
</table>

<button class="btn btn-warning" name="b1" value="go to admin page"><a href="http://localhost/sbr/admin/welcomeadmin.php">Go To Admin Page</a></button>
</center>
<hr>

</body>
</html>



<footer>
<html>
<head>

<body>
	
<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1210px; height: 120px}
	</style>

			
	
		<div id='tab1'><font size="5"></div>
	</footer>