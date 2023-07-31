<?php
$host='localhost';
$username='root';
$password='';
$dbname='blood_donation';
$con=mysqli_connect($host,$username,$password,$dbname);
if(!$con)
{
	echo " Database not connected";
}
else
{
	echo "Database connected";
}
?>