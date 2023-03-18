<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if(!$_SESSION['count'])
$_SESSION['count']=0;
if($_GET['count']=='yes')
$_SESSION['count']=$_SESSION['count']+1;
echo"<h1>".$_SESSION['count']."</h1>";
?>
<a href="session.php?count=yes">click here to count</a>
<a href="session_destroy.php">session_destroy</a>

