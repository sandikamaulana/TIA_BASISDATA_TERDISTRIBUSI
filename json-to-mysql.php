<?php
//json_mysql.php

$connect = mysql_connect("localhost", "root", "", "restaurant");

$filename = "restaurant2.json";
$data = file_get_contents($filename);
$array = json_decode($data, true);
foreach($array as $row)
	{
	$sql = ("INSERT INTO tbl_restaurant(id,address,borough,cuisine,grades,name,restaurant_id) values('".$row["id"]."','".$row["borough"]."'.$row["cuisine"]."'.$row["grades"]."'.$row["name"]."'.$row["restaurant_id"]."'));

	mysqli_query($connect, $sql); 
	{
echo "Restaurant Data Inserted";
?>
