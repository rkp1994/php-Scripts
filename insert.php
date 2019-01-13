<?php

$conn=mysqli_connect('localhost','root','');

if(!$conn)
{
  echo "Connection Request failed!!!!";

}

else
{
	echo "Connection Successful!!!";
}
if(!mysqli_select_db($conn,'product'))
{
	echo "Database not selected!!";
}
/*$id = isset($_GET['id']) ? $_GET['id'] : '';
$Product_code="";
$Product_name="";
$Price="";
$Stock_available="";
$Lot_number="";
$Aged_time="";

$Product_code = $_POST['product_code'];
$Product_name = $_POST['product_name'];
$Price = $_POST['price'];
$Stock_available = $_POST['stock_available'];
$Lot_number = $_POST['lot_number'];
$Aged_time = $_POST['aged_time'];
*/

$id1 = isset($_GET['product_code']) ? $_GET['product_code'] : '';
$id2 = isset($_GET['product_name']) ? $_GET['product_name'] : '';
$id3= isset($_GET['price']) ? $_GET['price'] : '';
$id4 = isset($_GET['stock_available']) ? $_GET['stock_available'] : '';
$id5 = isset($_GET['lot_number']) ? $_GET['lot_number'] : '';
$id6 = isset($_GET['aged_time']) ? $_GET['aged_time'] : '';


$sql="INSERT INTO rice (product_code, product_name,price, stock_available, lot_number, aged_time) VALUES ('$id1', '$id2', '$id3', '$id4', '$id5', '$id6');";
if(!mysqli_query($conn,$sql))
{
	echo "Connection failed to the Data base";
}
else
{
	echo "Data Inserted Successfully!!";
}

header("refresh:2; url=index.html");

?>
