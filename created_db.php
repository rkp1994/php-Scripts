<?php

// The php script for estiblesting the db connection

$server_name="localhost";
$user_name="root";
$password="";
$db="introduction";



//cretae connection
$conn=mysqli_connect($server_name, $user_name, $password,$db);

//check connection
if(!$conn)
{
  die ("Connection Failed : ".mysqli_connect_error());
}

//script for the database creation
/*
$sql="create database introduction";
if(mysqli_query($conn,$sql))
{
  echo "Database created successfully";
  echo "<br>";
}
else {
  echo "Error in connecting the database".mysqli_error($conn);
  echo "<br>";

}
*/

// script for the table creation
/*
$sql="create table information (
  id int(6) auto_increment primary key,
  name varchar(30) NOT NULL, email varchar(30) NOT NULL, website varchar(30) NOT NULL, gender varchar(10), comment varchar(500)
  )";
  if(mysqli_query($conn,$sql))
  {
    echo "Table Information has been created successfully";
    echo "<br>";
  }
  else {
    echo "Error in connecting the database".mysqli_error($conn);
    echo "<br>";

  }
  */
  //script for the inserting the data in the table Information
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$website=$_POST["website"];
$gender=$_POST["gender"];
$comment=$_POST["comment"];

/*
  $sql="INSERT INTO information VALUES ('$id','$name','$email','$website','$gender','$comment')";
  if(mysqli_query($conn, $sql))
  {
    echo "The data has been inserted in the information table successfully";
  }
  else {
    echo "Error is:- ".mysqli_error($conn);
  }
  */

// script for the deleting of the element from the table

/*
  $sql="delete from information where id='$id'";
  if(mysqli_query($conn,$sql))
  {
    echo "Data has been deleted successfully";
  }
  else {
    echo "Opps Error Occured:-".mysqli_error($conn);
  }

*/
  //script for updating the data in the table

$sql="update information set name='Bakchod' where id='$id'";
if(mysqli_query($conn,$sql))
{
  echo "Data has been updated successfully";
}
else {
  echo "opps!! Error Occured:-".mysqli_error($conn);
}
  mysqli_close($conn);
 ?>
