<?php
# php code for the implementation of the arrays

$bike=array("Honda","Royal Enfield","Bajaj","Harle Devidson");

echo $bike[0];
echo "<br>";

echo $bike[1];
echo "<br>";

echo $bike[2];
echo "<br>";

echo $bike[3];
echo "<br>";

$bike[4]="Indian";

echo $bike[4];
echo "<br>";

echo "The count of the elements in the array is :- ".count($bike);
echo "<br>";
echo "<br><br><br>";
# Print the array elements by using the loop
$array_length=count($bike);
for($i=0;$i<$array_length;$i++)
{
  echo "The ".$i."th Bike in the list is :- ".$bike[$i];
  echo "<br>";
}
echo "<br><br><br>";
echo "The Array before the shorting:-";
echo "<br>";
$array_length=count($bike);
for($i=0;$i<$array_length;$i++)
{
  echo "The ".$i."th Bike in the list is :- ".$bike[$i];
  echo "<br>";
}
echo "<br><br><br>";
sort($bike);

echo "The Array after Shorting:-";
echo "<br>";
$array_length=count($bike);
for($i=0;$i<$array_length;$i++)
{
  echo "The ".$i."th Bike in the list is :- ".$bike[$i];
  echo "<br>";
}

 ?>
