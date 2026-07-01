<?php
  // connect to mysql database
   $server   = "localhost:3306";
   $username = "root";
   $password = "";
   $dbname   = "star_x";

   $conn = mysqli_connect($server, $username, $password ,$dbname);

   if(!$conn)
   {
       echo"Not connected..!";
   }
   else{
       //echo "connected..!";
   }
   
?>