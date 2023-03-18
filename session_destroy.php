<?php//start the session
session_start();
session_destroy();
echo"<h1>session_destroy</h1>";
echo"<a href=http://localhost/sbr/admin/session.php></a>";
?>