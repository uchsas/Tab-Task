<?php

$servername="localhost";
$username="root";
$password="";
$dbname="rms1";


$name="cat";
$price="8000";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	//$q="CREATE TABLE Shop(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(30) NOT NULL, Price INT(6) NOT NULL)";
	//$q="INSERT INTO Shop(Name,Price) VALUES('".$name."',".$price.")";
	//$q="DELETE FROM Shop where ID=1002";
	
	$q="UPDATE Food SET Name='Pasta',Price='100' WHERE id=1003";
	$result=$conn->query($q);
	 
	echo "Update Successfuly";
	
	
	/*$q="select * from Food";
	$result=$conn->query($q);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "ID:".$row["ID"]."Name:".$row["Name"]."Price:".$row["Price"]."<br>";
		}
	}*/
}