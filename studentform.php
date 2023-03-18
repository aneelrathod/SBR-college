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
#tab{border-radius: 10px; background-image: linear-gradient(to right,steelblue,white); width: 330px; height: 225px}
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
<marquee><font color="red"><b>Addmission open for 2023 PUC,BCA,B.Com,Bsc,MBA.MCA</marquee></p>
<hr>
<button class="btn btn-warning"><a href="http://localhost/sbr/user/userlogin.php">back</a></button>
<center><button class="btn btn-danger">Student Registration Form</button>

	
	
	

		<script type="text/javascript">
		function chk()
		 {    
       
    
            if (document.f1.t1.value=="") 
            {    
                alert("Name is required");    
                    
                  
            }    
            else if (document.f1.t2.value=="")
             {    
                alert("Last Name is required");    
                
            }    
            else if (document.f1.t3.value=="")
             {    
                alert("Address is required");    
                    
                   
            }    
            else if (document.f1.gen.value=="") 
            {    
                alert("Gender is required");    
                  
                 
            }    
           else  if (document.f1.t4.value=="") 
           {    
                alert("Email Id is required please enter at least 8 characters with 1 uppercase 1 lowercase,1 digit & a symbol");    
                   
            }    
            else if (document.f1.t5.value=="")
             {    
                alert("Mobile number is required");    
                   
                   
            }    
			else if(document.f1.t6.value=="")
			{
				alert("enter aadhar number")
			}
            else if (document.f1.course.value=="")
             {    
                alert("Course is required");    
                   
            }    
               
        }    
	</script>
</head>

<body style="background:url(bgimage.jpg);background-size:100%;background-repeat: no-repeat;">



	<form name="f1"  action="studentform.php" method="POST">

	<div id="tab"><table border="0" cellpadding="0" cellspacing="0">
		<tr><td>First name:</td><td><input type="text" name="t1" placeholder="first name"></td></tr>

			
		<tr><td>Last Name:</td><td><input type="text" name="t2" placeholder="last name"></td></tr>

		<tr><td>Address:</td><td><textarea size="50" name="t3" placeholder="address"></textarea></td></tr>

		<tr><td>Gender:</td><td>
			<select name="gen" required>
				<option>
				<option>Male
					<option>Female
					
			</select>
			</td></tr>
			
			<tr><td>Email ID:</td><td><input type="email_id" name="t4" placeholder=Example@gmail.com id="email_id" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required title="please enter at least 8 characters with 1 uppercase 1 lowercase,1 digit & a symbol"></td></tr>
</td></tr>
			<tr><td>Mobile:</td><td><input type="number" name="t5" placeholder=mobile-number pattern=".{10.}" required title =" only mobile number"></td></tr>
			<tr><td>Aadhar Number:</td><td><input type="number" name="t6" plcaceholder=Aadhar_number pattern=".{15}" required title="only aadhar number"></td></tr>
			<tr><td>Course:</td><td>

			<select name="course" required>
				<option>
				<option>HTML
					<option>PHP
						<option>WORDPRESS
							
						<option>JAVASCRIPT
							<option>MYSQL
								
							<option>BOOTSTRAP
</ul></td></tr>

					<tr><td colspan="2"><center> <button class="btn btn-success" name="b1" value="Submit" onclick="chk()">submit
						<button class="btn btn-danger" name="reset" value="Reset">Reset</td></tr>
					</option>


				

		
	</table>
</form></body>
<button class="btn btn-warning"><a href="http://localhost/sbr/user/stdapplicationstatus.php"> Click for Print</a></button><br>

</html>

<?php
if(isset($_POST['b1']))
{

	$con=mysqli_connect("localhost","root","","sbrcollege");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	$sql="INSERT INTO studentdata(first_name,last_name,address,gender,email_id,mobile,aadhar,coures)values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[gen]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[course]')";

if(!mysqli_query($con,$sql))
{
	die('error:'.mysqli_error());

}

echo "<font color=blue> record succesfully added";
mysqli_close($con);
}
?>
	</center>
	<br>
	<style>
	#tab1{border-radius:; background-image: linear-gradient(to right,steelblue,steelblue); width: 1220px; height: 120px}
	</style>

			
	
		<center><div id='tab1'><font size="5"></div></center>
	</footer>