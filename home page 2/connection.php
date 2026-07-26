<?php
   // connect to mysql database
   $server   = "localhost";
   $username = "root";
   $password = "";
   $dbname   = "star_x";

   $conn = mysqli_connect($server, $username, $password, $dbname);

   if(!$conn) {
       die("Connection failed: " . mysqli_connect_error());
   }
?>