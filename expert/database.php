<?php
$servername="localhost"; 
$username="root";
$password="";
$dbname="askme";

$conn=mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
	die("Connection Failed : ". mysqli_connect_error());	
}
echo "Server Connected Successfully";
$db=mysqli_select_db($conn,$dbname);
if($db)
{
	echo "Database Connected";
}
else
{
	echo "database Error";
}
?>