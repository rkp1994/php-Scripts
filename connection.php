<?php
$ser="127.0.0.1";
$user="root";
$pass="";

//create connection
$conn=mysqli_connect($ser, $user, $pass);

//check connection

if(!$conn)
{
die("Connection Failed: " .mysqli_connect_error());
}

else
{
  echo "Connection Established Successful";
  
}
?>


