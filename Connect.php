<?php

   $conn = mysqli_connect('localhost' , 'root' , '' , 'junior_3c');

   if (!$conn) {
     die('connection failde').mysqli_connect_error();
   }
?>