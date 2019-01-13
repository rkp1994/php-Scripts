<?php
# a php script for the farm validation
$name=$email=$website=$comment=$gender="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name=test_input($_POST["name"]);
  $email=test_input($_POST["email"]);
  $website=test_input($_POST["website"]);
  $comment=test_input($_POST["comment"]);
  $gender=test_input($_POST["gender"]);
}
function test_input($data)
{
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

echo "the input you have been provided is below";
echo "<br><br>";
echo "Name:- ".$name;
echo "<br>";
echo "Email:- ".$email;
echo "<br>";
echo "Website:- ".$website;
echo "<br>";
echo "Gender:- ".$gender;
echo "<br>";
echo "Your Comment:- ".$comment;
echo "<br>";



?>
