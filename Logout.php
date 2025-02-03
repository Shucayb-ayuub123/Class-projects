<?php


 session_start();

 session_destroy();

 setcookie('username' , '' , time() - 3600 , '/');

 echo "You have been logout ";
 echo "<a href='Login2.php'>Login again</a>"


?>